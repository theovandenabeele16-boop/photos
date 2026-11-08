@extends('temlog')

@section('content')
    <h1>Inscription</h1>

    @if ($errors->any())
        <ul style="color:red">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <input type="text" name="name" value="{{ old('name') }}" placeholder="Nom" required><br>
        <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Mot de passe" required><br>
        <input type="password" name="password_confirmation" placeholder="Confirmer le mot de passe" required><br>
        <button type="submit">S'inscrire</button>
    </form>

    <a href="{{ route('login') }}">Déjà un compte ?</a>

@endsection