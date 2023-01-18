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
    public function getSubt ($num1, $num2)
    {
        $subt = $num1 - $num2;
        logger()->debug('Sub feita', ['num1' => $num1, 'num2' => $num2, 'sub' => $subt]);

        return $subt;
    }

    public function getDiv ($num1, $num2)
    {
        if ($num2 == 0) {
            logger()->error('Divisor zero!');
        }
        else{
            logger()->info('Div feita');
        }
    }

    public function getMult($num1, $num2)
    {
        if ($num1 < 0 || $num2 < 0) {
            logger()->warning('Negativo');
        }
    }
}
