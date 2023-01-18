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
}
