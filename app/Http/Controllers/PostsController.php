<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
<<<<<<< HEAD

class PostsController extends Controller
{
    public  function posts(){
        $posts = Posts::all();
=======
use DB;

class PostsController extends Controller
{
    //Affichage Des Publications
    public function posts(){
        $posts = Posts::all()->sortByDesc('created_at');
>>>>>>> 4576ad6cae8c8646824d680c92866dd04803090b
        return view('Posts/posts', [
            'posts' => $posts,
        ] );
    }

<<<<<<< HEAD
=======
    //Ajout Nouvelles Publications
>>>>>>> 4576ad6cae8c8646824d680c92866dd04803090b
    public  function viewNewPost(){
        return view('Posts/newpost');
    }

    public function addNewPost(){

        request()->validate([
            'posttitle' =>['required'],
            'postcontent' =>['required'],
            'postpic' => ['required'],
        ]);

<<<<<<< HEAD
        Posts::create([ 
            'name' => request('posttitle'),
            'description' => request('postcontent'), 
            'photo' => cloudinary()->upload(request()->file('postpic')->getRealPath())->getSecurePath(),
            'user_id' => auth()->id(),
        ]);

        return view('Posts/newpost');
    }
=======
        auth()->user()->posts()->create([ 
            'posttitle' => request('posttitle'),
            'postcontent' => request('postcontent'), 
            'postpic' => cloudinary()->upload(request()->file('postpic')->getRealPath())->getSecurePath(),
            'user_id' => auth()->id(),
        ]);

        //Retourne sur la page d'administration des publications
        $posts = Posts::all()->sortByDesc('created_at');
        return view('Posts/posts', [
            'posts' => $posts,
        ] );
    }



    //Suppression Publication
    public function delPost(){
        DB::table('posts')->where('id', request('del_id'))->delete();
        
        //Retourne sur la page d'administration des publications
        $posts = Posts::all()->sortByDesc('created_at');
        return view('Posts/posts', [
            'posts' => $posts,
        ] );
    }



    //Modification Publication
    public  function viewModPost(){
        return view('Posts/modpost');
    }

    public function modPost(){

        $post = DB::table('posts')->where('id', request('mod_id'))->first();

        //Vérifie si le titre de la publication a été modifié
        if($post->posttitle != request('posttitle')){
            $post->posttitle = request('posttitle');
        }
        //Vérifie si le contenu de la publication a été modifié
        if($post->postcontent != request('postcontent')){
            $post->postcontent = request('postcontent');
        }

        //Modifie le titre et contenu de l'article s'ils ont été modifiés
        DB::table('posts')->where('id', request('mod_id'))->update([
            'posttitle' => request('posttitle'),
            'postcontent' => request('postcontent'),
        ]);

        //Vérifie si la photo a été modifiée et la modifie
        if(request('postpic') != NULL){
            DB::table('posts')->where('id', request('mod_id'))->update([
                'postpic' => cloudinary()->upload(request()->file('postpic')->getRealPath())->getSecurePath(),
            ]);
        }

        //Retourne sur la page d'administration des publications
        $posts = Posts::all()->sortByDesc('created_at');
        return view('Posts/posts', [
            'posts' => $posts,
        ] );
    }

>>>>>>> 4576ad6cae8c8646824d680c92866dd04803090b
}
