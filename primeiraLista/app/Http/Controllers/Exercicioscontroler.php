<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exercicioscontroler extends Controller
{
    public function abrirListaExercicios(){
        return view('layout');
    }

    public function respExer1(Request $request){

        $valor1 = floatval($resquest->input('valor1'));
        $valor2 = floatval($resquest->input('valor2'));
        $valor3 = floatval($resquest->input('valor3'));

        $soma = $valor1 + $valor2 + $valor3;

        $media = number_format(($soma / 3), 2, ',', '.');

        return view('exer1', compact('media'));
    }

}
