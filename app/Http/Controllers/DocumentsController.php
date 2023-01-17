<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentsController extends Controller
{
    public function create()
    {
        return view('documents.create');
    }

    public function store(Request $request)
    {
        $name = 'file.png';
        $request->file->storeAs('/public', $name);


        return redirect('/');
    }
}
