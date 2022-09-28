@extends('layout_structure.app')

@section('page_title', 'Catalogo film')

@section('content')

<h1>Il film con il voto migliore è:</h1>

<h1>{{$migliorFilm->title}}</h1>

@endsection