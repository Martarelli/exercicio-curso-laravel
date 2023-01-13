<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $userID = Auth::id();
        Contact::create([
           'name' => $request -> name,
           'email' => $request -> email,
           'phone' => $request -> phone,
           'user_id' => $userID
        ]);

        return redirect('/contacts');
    }

    public function show($id)
    {
        $userID = Auth::id();
        $contact = Contact::find($id);

        if($userID == $contact -> user_id)
        {
           return view('contact.show', compact('contact'));
        }
            return redirect('404');

    }

    public function edit($id)
    {
        $product = Product::find($id);

        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product -> update([
           'name' => $request -> name,
           'description' => $request -> description,
           'price' => $request -> price
        ]);

        return redirect('/show/' . $id);
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product -> delete();

        return redirect('/');
    }

}
