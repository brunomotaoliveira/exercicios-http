<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    //
    public function setSoma(Request $request) {
        $somaValor1 = $request->input('valor1');
        $somaValor2 = $request->input('valor2');
    }

    public function setSubtracao(Request $request)
}
