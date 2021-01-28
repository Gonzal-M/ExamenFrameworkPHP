@extends('layout')

@section('contenu')

<?php $post = DB::table('posts')->find($_GET["post_id"]); ?>

<h1>Modification de la publication "{{$post->posttitle}}"</h1><br>

<form action="/posts" method="post" enctype="multipart/form-data" style="margin-left:10px;">

    <div class="row">
        <label class="col-1">Titre :</label>
        <input type="string" name="posttitle" value="{{$post->posttitle}}">
    </div><br>

    <div class="row">
        <label class="col-1">Contenu :</label>
        <textarea cols="100" rows="5" name="postcontent">{{$post->postcontent}}</textarea>
    </div><br>

    <div class="row">
        <div class="col">
            <img src="{{$post->postpic}}" alt="Photo de la publication" style="max-width:200px; max-height:200px;">
        </div>
        <div class="col">
            <label>Photo :</label>
            <input type="file" name="postpic" class="form-control-file">
        </div>
    </div><br><br>



    <div>
        <input type="hidden" name="mod_id" value="{{$post->id}}">
        <input type="submit" value="Modifier" class="btn btn-info">
    </div>

</form>

@endsection