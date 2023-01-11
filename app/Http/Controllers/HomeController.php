<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function pokemon ($nome){
        return view('pokemon', compact('nome'));
    }
}
