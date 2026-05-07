<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PainelController;

Route::get('/', [PainelController::class, 'index']);

Route::get('/liberar/{id}', [
    PainelController::class,
    'liberar'
]);