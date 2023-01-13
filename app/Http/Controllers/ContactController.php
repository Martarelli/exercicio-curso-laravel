<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contacts()
    {
        $contacts = Contact::all();

        return view('contact.index', compact('contacts'));
    }

    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        Contact::create([
           'name' => $request -> name,
           'email' => $request -> email,
           'phone' => $request -> phone,
           'user_id' => 0
        ]);

        return redirect('/contacts');
    }

}
