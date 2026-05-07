<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $fillable = [
        'vaga_id',
        'telefone_usuario',
        'placa',
        'duracao',
        'valor',
        'esta_ativa'
    ];
}