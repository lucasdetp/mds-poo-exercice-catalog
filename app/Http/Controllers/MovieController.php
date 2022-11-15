<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function show($id)
    {
        $movie = Movie::where('id', $id)->first();

        return view('movies_show', ['movie' => $movie]);
    }

    public function list()
    {
        $movies = Movie::limit(20)->get();

        return view('movies_list', ['movies' => $movies]);
    }
}
