<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class DashboardController extends Controller
{
    function index()
    {
        $featuredMovies = Movie::whereIsFeatured(true)->get();
        $movies = Movie::all();
        // return [
        //     'featuredMovies' => $featuredMovies,
        //     'movies' => $movies
        // ];
        return inertia('User/Dashboard/Index', [
            'featuredMovies' => $featuredMovies,
            'movies' => $movies
        ]);
    }
}
