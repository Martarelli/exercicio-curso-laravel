<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function pokemon ($nome){
        return view('pokemon', compact('nome'));
    }

    public function calculadora (Request $resquest){
        return view('calculadora');
    }
    public function calcular (Request $resquest){
        $num1 = $resquest -> num1;
        $operador = $resquest -> operador;
        $num2 = $resquest -> num2;

        if ($operador === '+')
        {
            $resultado = $num1 + $num2;
            return view('calcular', compact('resultado'));
        }
        else if ($operador === '-')
        {
            $resultado = $num1 - $num2;
            return view('calcular', compact('resultado'));
        }
        else if ($operador === '/')
        {
            $resultado = $num1 / $num2;
            return view('calcular', compact('resultado'));
        }
        else if ($operador === '*')
        {
            $resultado = $num1 * $num2;
            return view('calcular', compact('resultado'));
        }
    }
}
