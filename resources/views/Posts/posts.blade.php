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
        <p style="color:grey;">{{$post->created_at}}</p>
        <a href="" class="btn btn-info">Modifier</a>
        <a href="" class="btn btn-danger">Supprimer</a>
    </div>

</li>
@endforeach
</ul>

@endsection