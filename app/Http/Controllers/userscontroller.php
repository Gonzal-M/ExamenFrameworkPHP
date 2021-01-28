<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User as User;

class userscontroller extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('users/index', [
            'users' => $users
        ]);
    }

    public function show(int $id)
    {
        $users = User::all()->where('id', $id)->first();
        return view('users/show', ['user' => $users]);
    }
}
