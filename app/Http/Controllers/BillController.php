<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\Client;
use Illuminate\Http\Request;

class BillController extends Controller
{
    public function getBills($id){

        $client = Client::find($id);
        $bills = Bill::where('client_id', '=', $client->id)->get();

        return response()->json($bills);
    }

    public function getExpensive($value){

        $bills = Bill::where('value', '>', $value)->get();

        return response()->json($bills);
    }

    public function getExpensive($value1, $value2){

        $bills = Bill::where([['value', '>', $value1],['value', '<', $value2]])->get();

        return response()->json($bills);
    }
}
