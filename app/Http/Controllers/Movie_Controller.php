<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Movie;

class Movie_Controller extends Controller
{

    public function genre()
    {
        $genres = DB::table('genre')->get();
        return view('genre', compact('genres'));
    }

    public function topMovie()
    {
        $movies = DB::table('movie')
            ->where('vote_average','>',8)
            ->where('vote_count','>',10000)
            ->get();

        return view('topmovie',compact('movies'));
    }

    function FilmCanada()
    {
       $movies = DB::table("movie")
            ->select("movie_name", "release_date", "runtime")
            ->where("country_name", "Canada")
            ->get();

        return view("filmcanada", compact("movies"));
    }


    public function topBudget() {
        $movies = DB::table('movie')
            ->orderByDesc('budget')
            ->limit(10)
            ->get();

        return view('top_budget', compact('movies'));
    }


    public function topRuntime()
    {
        $movies = DB::table('movie')
            ->select('movie_name', 'release_date', 'runtime')
            ->where('runtime', '>', 120)
            
            ->limit(10)
            ->get();

        return view('topruntime', compact('movies'));
    }

    public function C7_6()
    {
        $movies = Movie::getActionMovies();

        return view('C7_6', compact('movies'));
    }

    function binhchoncao()
    { 
        $phim = DB::table("movie as p")
        ->select("p.movie_name", "p.release_date", "p.vote_average")
        ->orderBy("p.vote_average", "desc")
        ->limit(10)
        ->get();
        
        return view("Binh_chon_cao",compact("phim"));        
    }
}
