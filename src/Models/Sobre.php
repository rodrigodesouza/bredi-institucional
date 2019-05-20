<?php

namespace Bredi\BrediInstitucional\Models;

use Illuminate\Database\Eloquent\Model;

class Sobre extends Model
{
    protected $fillable = [
        'titulo',
        'subtitulo',
        'imagem',
        'conteudo',
        'galeria',
    ];
}
