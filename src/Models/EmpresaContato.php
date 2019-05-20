<?php

namespace Bredi\BrediInstitucional\Models;

use Illuminate\Database\Eloquent\Model;

class EmpresaContato extends Model
{
    protected $casts = [
        'telefones' => 'array',
    ];

    protected $fillable = [
        'titulo',
        'email',
        'endereco',
        'endereco_completo',
        'telefones',
        'whatsapp',
        'instagram',
        'facebook',
        'youtube',
        'linkedin',
        'twitter',
        'google_plus',
        'latitude',
        'longitude',
    ];

    public function getTelefonesAttribute()
    {
        return null;
    }
}
