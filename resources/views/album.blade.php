@extends('app')
@section('content')

@forelse ($albums as $album )
    <h1>{{ $album->titre }}</h1>

    @forelse ($album->photos as $photo)
    <figure>
        <img src="{{ $photo->url }}" alt="{{ $photo->titre }}" width="300" referrerpolicy="no-referrer">
        <figcaption>{{ $photo->titre }} (note : {{ $photo->note }}/5)</figcaption>
    </figure>

    @empty
    <p>Cet album est vide.</p>

    @endforelse

@empty
    <p>Pas d'album pour le moment</p>

@endforelse
@endsection