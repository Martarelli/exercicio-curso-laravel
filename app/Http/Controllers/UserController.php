<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function signin(Request $request)
    {
        $credentials = [
            'email' => $request -> email,
            'password' => $request -> password,
        ];

        if(auth() -> attempt($credentials)){
            return redirect('/');
        }

        return back();
    }

    public function register()
    {
        return view('register');
    }

    public function signup(Request $request)
    {
        User::create([
            'name' => $request -> name,
            'email' => $request -> email,
            'password' => bcrypt($request -> password)
        ]);

        return redirect() -> route('login'); //redirect utilizando name
    }
    public function logout()
    {
        auth()->logout();

        return redirect() -> route('login'); //redirect utilizando name
    }
}
