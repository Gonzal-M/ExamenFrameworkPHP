@extends('layout')

@section('contenu')
<style>
    .form_inscription {
        /* Uniquement centrer le formulaire sur la page */
        margin: 1em auto 2em;
        width: 400px;
        /* Encadré pour voir les limites du formulaire */
        padding: 1em;
        border: 1px solid #ccc;
        border-radius: 1em;
    }

    form div+div {
        margin-top: 1em;
    }

    input {
        /* Pour s'assurer que tous les champs texte ont la même police.
     Par défaut, les textarea ont une police monospace */
        font: 1em sans-serif;

        /* Pour que tous les champs texte aient la même dimension */
        width: 365px;
        box-sizing: border-box;

        /* Pour harmoniser le look & feel des bordures des champs texte */
        border: 1px solid #999;
    }

    input:focus {
        /* Pour souligner légèrement les éléments actifs */
        border-color: #000;
    }
</style>

<form class="form_inscription" action="/inscription" method="post">

    {{csrf_field()}}

    <div>
        <input type="string" name="name" placeholder="Prénom">
        @if($errors->has('name'))
        <small id="emailHelp" class="form-text text-muted">{{$errors->first('name')}}</small>
        @endif
    </div>

    <div>
        <input type="email" name="email" placeholder="Email">
        @if($errors->has('email'))
        <small id="emailHelp" class="form-text text-muted">{{$errors->first('email')}}</small>
        <!-- <p>Email is mandatory</p> ou <p>{{$errors->first('email')}}</p> -->
        @endif
    </div>

    <div>
        <input type="password" name="password" placeholder="Mot de passe">
        @if($errors->has('password'))
        <small id="emailHelp" class="form-text text-muted">{{$errors->first('password')}}</small>
        @endif
    </div>

    <div>
        <input type="password" name="password_confirmation" placeholder="Confirmation mot de passe">
        @if($errors->has('password_confirmation'))
        <small id="emailHelp" class="form-text text-muted">{{$errors->first('password_confirmation')}}</small>
        @endif
    </div>

    <div>
        <input type="submit" value="Valider">
    </div>

</form>

@endsection