<?php

namespace App\Http\Controllers;

use App\Models\Movie;
class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::with(['directors', 'actors', 'genres', 'ratings.reviewer'])->get();
        return response()->json($movies);
    }

    public function show($id)
    {
        $movie = Movie::with(['directors', 'actors', 'genres', 'ratings.reviewer'])->findOrFail($id);
        return response()->json($movie);
    }

    public function moviesWithGenres()
    {
        $movies = Movie::with('genres')->get();
        return response()->json($movies);
    }

    public function moviesWithRatings()
    {
        $movies = Movie::with(['ratings.reviewer'])->get();
        return response()->json($movies);
    }
}
