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

        return redirect('/places');
    }
    public function show($id)
    {
        $product = Product::find($id);

        return view(
        'products.show',
        compact('product')
        );
    }
}
