<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class connexioncontroller extends Controller
{
    public function form()
    {
        return view('connexion/connexion');
    }

    public function connexion()
    {
        request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8'],
        ]);

        $result = auth()->attempt([
            'email' => request('email'),
            'password' => request('password'),
        ]);

        if ($result) {
            flash('You are well connected')->success();
            return redirect('/dashboard');
        }
        return back()->withErrors([
            'email' => "The credentials do match ! Try again"
        ]);
    }
}
