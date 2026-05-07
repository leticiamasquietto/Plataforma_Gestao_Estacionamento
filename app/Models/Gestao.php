<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gestao extends Model
{
    protected $table = 'gestao';
    protected $fillable = ['valor_hora'];
}