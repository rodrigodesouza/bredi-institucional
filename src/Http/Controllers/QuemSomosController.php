<?php

namespace Bredi\BrediInstitucional\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Bredi\BrediInstitucional\Models\Sobre;
use Rd7\ImagemUpload\ImagemUpload;

class QuemSomosController extends Controller
{
    public function __construct()
    {
        $this->destino = 'empresa/';
        $this->resolucao = ['g' => ['h' => 460, 'w' => 1917]];
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit()
    {
        $sobre = Sobre::first();
        return view('brediinstitucional::controle.quem-somos.form', compact('sobre'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request)
    {
        $input = $request->except('_token');

        $imagens = ImagemUpload::salva(['input_file' => 'capa', 'destino' => $this->destino, 'resolucao' => $this->resolucao]);
            
        if ($imagens) {
            $input['imagem'] = $imagens;
        }

        try {
            $sobre = Sobre::first();

            if (!isset($sobre->id)) {
                $sobre = Sobre::create($input);
            } else {
                $sobre->update($input);
            }

            return redirect()->back()->with('error', false)->with('msg', 'Operação realizada com sucesso!');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', true)->with('msg', 'Erro ao efetuar a operação.')->with('exception', $e->getMessage());
        }
    }

}
