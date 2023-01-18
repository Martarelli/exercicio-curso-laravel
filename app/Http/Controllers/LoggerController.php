<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoggerController extends Controller
{
    public function getSoma ($num1, $num2)
    {
        $soma = $num1 + $num2;
        logger()->info('Soma feita');

        return $soma;
    }
}
