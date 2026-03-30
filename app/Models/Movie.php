<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Movie extends Model
{
    protected $table = 'movie';

    public static function getActionMovies(){
        return DB::table('movie as m')
            ->join('movie_genre as mg', 'm.id', '=', 'mg.id_movie')
            ->join('genre as g', 'mg.id_genre', '=', 'g.id')
            ->where('g.genre_name', 'Action')
            ->select(
                'm.movie_name',
                'm.release_date',
                'm.overview',
                'm.image_link'
            )
            ->get();
    }
}