@extends('temlog')
@section('content')
    <h1 class="salut">Connexion</h1>

    @if ($errors->any())
        <ul style="color:red">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{route("login")}}" method="post">
        @csrf
        <input type="email" name="email" value="{{ old('email') }}" required placeholder="Email" /><br />
        <input type="password" name="password" value="{{ old('password') }}" required placeholder="password" /><br />
        Remember me<input type="checkbox" name="remember"   /><br />
        <a href="{{ route('index') }}"><input type="submit" /></a><br />
    </form>

    <p>Si c'est la première fois que t'es là :</p>
    <a href="{{ route("register") }}">Register</a>
@endsection