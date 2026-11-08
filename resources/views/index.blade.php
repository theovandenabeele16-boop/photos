@extends('app')
@section('content')


@auth
        <h1>Bonjour {{Auth::user()->name}}</h1>
        <a href="{{route("logout")}}"
           onclick="document.getElementById('logout').submit(); return false;">Logout</a>
        <form id="logout" action="{{route("logout")}}" method="post">
            @csrf
        </form>
       {{-- <a href="{{ route("??")}}">Route accessible que si on est connecté</a>--}}

@endauth

@guest
    <h1>Salut Guest</h1>
    <p>On t'invite à te connecter pour créer ton propre album photo et pour regarder celui des autres 😽</p>
    <a href="{{ route("login") }}">Se connecter</a>
    <p>Si c'est ta première fois, créer ton compte 😡</p>
    <a href="{{ route("register") }}">Créer son compte</a>
@endguest