<?php

namespace Bredi\BrediInstitucional\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Bredi\BrediInstitucional\Models\EmpresaContato;

class EmpresaContatoController extends Controller
{

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit()
    {
        $empresaContato = EmpresaContato::first();
        return view('brediinstitucional::controle.empresa-contato.form', compact('empresaContato'));
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
        
        if (isset($input['telefones']) and count($input['telefones'])) {
            $input['telefones'] = array_filter($input['telefones']);
            $input = array_filter($input);
        }

        try {
            $empresaContato = EmpresaContato::first();

            if (!isset($empresaContato->id)) {
                $empresaContato = EmpresaContato::create($input);
            } else {
                $empresaContato->update($input);
            }

            return redirect()->back()->with('error', false)->with('msg', 'Operação realizada com sucesso!');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', true)->with('msg', 'Erro ao efetuar a operação.')->with('exception', $e->getMessage());
        }
    }

}
