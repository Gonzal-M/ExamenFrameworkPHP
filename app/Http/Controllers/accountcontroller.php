<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class accountcontroller extends Controller
{
    public  function dashboard()
    {
        return view('dashboard', [
            'user' => auth()->user(),
        ]);
    }

    public function signout()
    {
        auth()->logout();

        return redirect('/connexion');
    }

    public function form_password_modification()
    {
        return view('password_modification');


        flash("You have to be connected to acces to this page")->error();
        return redirect('/connexion');
    }

    public function password_modification()
    {
        request()->validate([
            'password' => ['required', 'min:8', 'confirmed'],
            'password_confirmation' => ['required']
        ]);

        $user = auth()->user();
        $user->password = bcrypt(request('password'));
        $user->save();

        /*auth()->user()->update([
            'password' => bcrypt(request('password')),
        ]);*/

        flash('Your password has been modified')->success();
        return redirect('/dashboard');
    }
}
