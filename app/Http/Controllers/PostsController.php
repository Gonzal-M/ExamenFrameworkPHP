<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class PostsController extends Controller
{
    public  function posts(){
        $posts = Posts::all();
        return view('Posts/posts', [
            'posts' => $posts,
        ] );
    }

    public  function viewNewPost(){
        return view('Posts/newpost');
    }

    public function addNewPost(){

        request()->validate([
            'posttitle' =>['required'],
            'postcontent' =>['required'],
            'postpic' => ['required'],
        ]);

        Posts::create([ 
            'name' => request('posttitle'),
            'description' => request('postcontent'), 
            'photo' => cloudinary()->upload(request()->file('postpic')->getRealPath())->getSecurePath(),
            'user_id' => auth()->id(),
        ]);

        return view('Posts/newpost');
    }
}
