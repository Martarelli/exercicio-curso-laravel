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
        $userID = Auth::id();
        $contact = Contact::find($id);

        if($userID == $contact -> user_id)
        {
           return view('contact.edit', compact('contact'));
        }
            return redirect('404');
    }

    public function update(Request $request, $id)
    {
        $product = Contact::find($id);
        $product -> update([
           'name' => $request -> name,
           'email' => $request -> email,
           'phone' => $request -> phon
        ]);

        return redirect('/show/' . $id);
    }

    public function destroy($id)
    {
        $userID = Auth::id();
        $contact = Contact::find($id);

        if($userID == $contact -> user_id)
        {
            $contact -> delete();
            return redirect('/contacts');
        }
            return redirect('404');
    }

}
