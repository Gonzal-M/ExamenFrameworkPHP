@extends('layout')

@section('contenu')

<<<<<<< HEAD
<h1>Vos publications</h1>

<ul>
=======
<h1>Vos publications</h1><br>

<a href="/newpost" class="btn btn-info">Nouvelle publication</a>

<ul><br>
>>>>>>> 4576ad6cae8c8646824d680c92866dd04803090b
@foreach($posts as $post)
<li class="row">

    <div class="col">
        <img src="{{$post->postpic}}" alt="Photo de la publication n°{{$post->id}}" style="max-width:200px; max-height:200px;">
    </div>
    <div class="col">
        <h3>{{$post->posttitle}}</h3>
        <p>{{$post->postcontent}}</p><br>
<<<<<<< HEAD
        <p style="color:grey;">{{$post->created_at}}</p>
        <a href="" class="btn btn-info">Modifier</a>
        <a href="" class="btn btn-danger">Supprimer</a>
    </div>

</li>
=======
        <p style="color:grey;">Publié le {{$post->created_at}}</p>
        <a href="/modpost?post_id={{$post->id}}" class="btn btn-info">Modifier</a>
        <form action="/posts" method="post">
            {{csrf_field()}}
            <input type="hidden" name="del_id" value="{{$post->id}}">
            <input type="submit" value="Supprimer" class="btn btn-danger">
        </form>
    </div>

</li><br>
>>>>>>> 4576ad6cae8c8646824d680c92866dd04803090b
@endforeach
</ul>

@endsection