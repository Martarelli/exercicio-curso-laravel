<?php

namespace App\Http\Controllers;

use App\Models\Place;
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

    public function store(Request $request)
    {
        Place::create([
            'name' => $request -> name,
            'description' => $request -> description,
            'address' => $request -> address
         ]);

        return redirect('/');
    }
}
