@extends('layout_structure.app')

@section('page_title', 'Catalogo film')

@section('content')
<h1>Benvenuto catalogo film (TO BE COMPLETED)</h1>

@foreach ($movies as $movie)
    <li> titolo: {{$movie->title}} </li>
@endforeach
@endsection