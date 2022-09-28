@extends('layout_structure.app')

@section('page_title', 'Catalogo film')

@section('content')

    <h1>Benvenuto nel catalogo dei film!</h1>

    <section class="d_flex jc_center ai_center f_wrap">
        @foreach ($movies as $movie)
            <div class="f_basis">
                <ul>
                    <li>Titolo: {{$movie->title}}</li>
                    <li>Titolo originale: {{$movie->original_title}}</li>
                    <li>Anno: {{$movie->date}}</li>
                    <li>Voto: {{$movie->vote}}</li>
                    <li>Nazionalità: {{$movie->nationality}}</li>
                </ul>
            </div>
        @endforeach
    </section>

@endsection