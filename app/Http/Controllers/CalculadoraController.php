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

    public function setSubtracao(Request $request) {
        $subtrairValor1 = $request->input('valor1');
        $subtrairValor2 = $request->input('valor2');
    }

    public function setDivisao(Request $request) {
        $dividirValor1 = $request->input('valor1');
        $dividirValor2 = $request->input('valor2');
    }

    public function setMultiplicacao(Request $request) {
        $multiplicarValor1 = $request->input('valor1');
        $multiplicarValor2 = $request->input('valor2');
    }
}
