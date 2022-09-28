@extends('layout_structure.app')

@section('page_title', 'Catalogo film')

@section('content')
<h1>Benvenuto catalogo film</h1>
<div>
    <ul>
        @foreach ($movies as $movie)
        <li>Titolo: {{$movie->title}}</li>
        <li>Titolo originale: {{$movie->original_title}}</li>
        <li>Anno: {{$movie->date}}</li>
        <li>Voto: {{$movie->vote}}</li>
        <li>Nazionalità: {{$movie->nationality}}</li>
        @endforeach
    </ul>
</div>
@endsection