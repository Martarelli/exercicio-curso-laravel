<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function contacts()
    {
        $userID = Auth::id();
        $contacts = Contact::where('user_id', $userID)->get();

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
            return abort(404);

    }

    public function edit($id)
    {
        $userID = Auth::id();
        $contact = Contact::find($id);

        if($userID == $contact -> user_id)
        {
           return view('contact.edit', compact('contact'));
        }
        return  abort(404);
    }

    public function update(Request $request, $id)
    {

        $userID = Auth::id();
        $contact = Contact::find($id);

        if($userID == $contact -> user_id)
        {
            $contact -> update([
                'name' => $request -> name,
                'email' => $request -> email,
                'phone' => $request -> phone
             ]);

            return redirect('/show/' . $id);
        }
        return abort(404);
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
        return abort(404);
    }

}
