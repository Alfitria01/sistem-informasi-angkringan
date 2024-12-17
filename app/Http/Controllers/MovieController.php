<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    function index()
    {
        $movies = Movie::getPopularMovies();
        return view('movies.index', compact('movies'));
    }
}
