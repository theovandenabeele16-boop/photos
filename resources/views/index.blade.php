@extends('app')
@section('content')


@auth
        <h1 class="salut">Bonjour {{Auth::user()->name}}</h1>
        <a class="liensindex" href="{{route("logout")}}"
           onclick="document.getElementById('logout').submit(); return false;">Logout</a>
        <form class="liensindex" id="logout" action="{{route("logout")}}" method="post">
            @csrf
        </form>
       <a href="{{ route("album")}}">Album Photo</a>
@endauth

@guest
    <h1 class="salut">Salut Guest</h1>
        
        <div class="connexion">
    <p id="p_connexion">On t'invite à te connecter pour créer ton propre album photo </br> et pour regarder celui des autres 😽</p>
    <a class="liensindex" id="a_connexion" href="{{ route("login") }}">Se connecter</a>
        
    <p id="p_inscription">Si c'est ta première fois ici, crée ton compte :</p>
    <a class="liensindex" id="a_inscription" href="{{ route("register") }}">Créer son compte</a>
        </div>
@endguest