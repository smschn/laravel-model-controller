<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class PageController extends Controller
{
    public function index() {
        $movies = Movie::all(); // all() ritorna una COLLECTION: è simile ad un array (come tale, si deve ciclare con un @foreach per accedere agli attributi di ogni singolo oggetto).
        return view('movies', compact('movies')); // compact('movies') è come scrivere ['movies' => $movies].
    }

    public function bestMovie() {
        $bestFilm = Movie::orderBy('vote', 'desc')->first(); // first non ha bisogno di ->get() e restituisce un singolo oggetto direttamente accessibile.
        return view('best', ['migliorFilm' => $bestFilm]);
    }
}