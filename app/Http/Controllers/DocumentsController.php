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

    public function storePhoto(Request $request)
    {
        $request->photo->storeAs('/public', 'file.jpg');

        return redirect('/');
    }

    public function storeImage(Request $request) {
        $request->image1->storeAs('/public/images', 'file1.jpg');
        $request->image2->storeAs('/public/images', 'file2.jpg');
    }
}
