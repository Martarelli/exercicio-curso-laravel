<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function places()
    {
        return view('places');
    }

    public function create()
    {
        return view('create');
    }
}
