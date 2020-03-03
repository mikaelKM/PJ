<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create()
    {
        return view('account.log');
    }
    public function store()
    {
        if (auth()->attempt(request(['email','password']))==false){
            return back()->WithErrors([
                'message' => 'The Email or Password is incorrect, kindly try again',
            ]);
        }
        return redirect()->to('/')->withSuccess([
            'message' => "You have been successfully logged in",
        ]);
    }
    public function destroy()
    {
        auth()->logout();
        return redirect()->to('/register');
    }
}
