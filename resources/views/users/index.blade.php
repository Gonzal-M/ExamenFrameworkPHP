@extends('layout')

@section('contenu')
<h1>Voici tout les utilisateurs </h1>
<br>
@foreach($users as $user)
<h3>Bonjour {{$user->name}}</h3>
<p>Voici votre adresse mail de connexion : <a href="{{route('Show.User', ['id' => $user->id])}}">{{$user->email}}</a></p>
@endforeach
@endsection