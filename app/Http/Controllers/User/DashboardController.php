<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class DashboardController extends Controller
{
    function index()
    {
        // Mengambil semua film yang memiliki atribut 'is_featured' bernilai 'true' sama dgn Movie::where('is_featured', true)->get();
        $featuredMovies = Movie::whereIsFeatured(true)->get();
        // Mengambil semua film dari model Movie
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
