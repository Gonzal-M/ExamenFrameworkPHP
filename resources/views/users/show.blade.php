@extends('layout')

@section('contenu')
<h1>Bonjour {{$user->name}} </h1>
<p>Voici votre adresse mail de connexion : <a href="{{route('Show.User', ['id' => $user->id])}}">{{$user->email}}</a></p>
@endsection