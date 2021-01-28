@extends('layout')

@section('contenu')

<h1>Vos publications</h1>

<ul>
@foreach($posts as $post)
<li class="row">

    <div class="col">
        <img src="{{$post->postpic}}" alt="Photo de la publication n°{{$post->id}}" style="max-width:200px; max-height:200px;">
    </div>
    <div class="col">
        <h3>{{$post->posttitle}}</h3>
        <p>{{$post->postcontent}}</p><br>
        <p style="color:grey;">Publié le {{$post->created_at}}</p>
        <a href="/modpost?post_id={{$post->id}}" class="btn btn-info">Modifier</a>
        <form action="/posts" method="post">
            <input type="hidden" name="del_id" value="{{$post->id}}">
            <input type="submit" value="Supprimer" class="btn btn-danger">
        </form>
    </div>

</li>
@endforeach
</ul>

@endsection