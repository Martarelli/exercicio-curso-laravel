<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function storeClient(Request $request){
        Client::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'id_number'=>$request->id_number,
        ]);

        return redirect('/');
    }

    public function getClient($id){

        $client = Client::find($id);

        return response()->json($client);
    }

    public function getName($name){

        $client = Client::where('name', '=', $name);

        return response()->json($client);
    }
}
