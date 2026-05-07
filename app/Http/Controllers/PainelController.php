<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PainelController extends Controller
{
    public function index()
    {
        $firestore = app('firebase.firestore')->database();

        // vagas
        $vagas = $firestore
            ->collection('vagas')
            ->documents();

        // reservas
        $reservas = $firestore
            ->collection('reservas')
            ->documents();

        // config
        $configDoc = $firestore
            ->collection('config')
            ->document('sistema')
            ->snapshot();

        $config = $configDoc->data();

        $total = $config['total_faturado'] ?? 0;

        return view('painel', compact(
            'vagas',
            'reservas',
            'config',
            'total'
        ));
    }

    public function liberar($id)
    {
        $firestore = app('firebase.firestore')->database();

        $firestore
            ->collection('reservas')
            ->document($id)
            ->update([
                [
                    'path' => 'esta_ativa',
                    'value' => false
                ]
            ]);

        return redirect('/');
    }
}