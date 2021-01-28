<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class PostsController extends Controller
{
    //Affichage Des Publications
    public  function posts(){
        $posts = Posts::all();
        return view('Posts/posts', [
            'posts' => $posts,
        ] );
    }

    //Ajout Nouvelles Publications
    public  function viewNewPost(){
        return view('Posts/newpost');
    }

    public function addNewPost(){

        request()->validate([
            'posttitle' =>['required'],
            'postcontent' =>['required'],
            'postpic' => ['required'],
        ]);

        auth()->user()->posts()->create([ 
            'posttitle' => request('posttitle'),
            'postcontent' => request('postcontent'), 
            'postpic' => cloudinary()->upload(request()->file('postpic')->getRealPath())->getSecurePath(),
            'user_id' => auth()->id(),
        ]);

        posts();
    }



    //Suppression Publication
    public function delPost(){
        DB::table('posts')->where('id', request('del_id'))->delete();
        posts();
    }



    //Modification Publication
    public  function viewModPost(){
        return view('Posts/modpost');
    }

    public function modPost(){

        $post = DB::table('posts')->where('id', request('mod_id'));

        //Récupère l'ancien titre et contenu de la publication
        $posttitle=$post->posttitle;
        $postcontent=$post->postcontent;

        //Vérifie si le titre de la publication a été modifié
        if($posttitle != request('posttitle')){
            $posttitle = request('posttitle');
        }
        //Vérifie si le contenu de la publication a été modifié
        if($postcontent != request('postcontent')){
            $postcontent = request('postcontent');
        }

        //Modifie le titre et contenu de l'article s'ils ont été modifiés
        DB::table('posts')->where('id', request('mod_id'))->update([
            'posttitle' => $posttitle,
            'postcontent' => $postcontent,
        ]);

        //Vérifie si la photo a été modifiée et la modifie
        if(request('postpic') != NULL){
            DB::table('posts')->where('id', request('mod_id'))->update([
                'postpic' => cloudinary()->upload(request()->file('postpic')->getRealPath())->getSecurePath(),
            ]);
        }

        posts();
    }

}
