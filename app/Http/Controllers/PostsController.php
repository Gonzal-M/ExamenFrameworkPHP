<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public  function viewNewPost(){
        return view('Posts/newpost');
    }

    public function addNewPost(){

        request()->validate([
            'posttitle' =>['required'],
            'postcontent' =>['required'],
            'postpic' => ['required'],
        ]);

        Post::create([ 
            'name' => request('posttitle'),
            'description' => request('postcontent'), 
            'photo' => cloudinary()->upload(request()->file('postpic')->getRealPath())->getSecurePath(),
            'user_id' => auth()->id(),
        ]);

        return view('Posts/newpost');
    }
}
