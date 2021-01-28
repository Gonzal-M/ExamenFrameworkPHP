<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User as User;

class inscriptioncontroller extends Controller
{
    public  function inscription()
    {
        return view('inscription');
    }

    public function formulaire()
    {

        request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', 'min:8'],
            'password_confirmation' => ['required'],
            'name' => ['required'],

        ]);

        $user = User::create([
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'name' => request('name'),
        ]);
        return "You have successfully registered and your email is " . request('email');
    }

    // public function store()
    // {
    //     Mail::to($user->email)->send(new SignUp($user));
    // }
}
