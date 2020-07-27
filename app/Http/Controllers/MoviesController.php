<?php

namespace App\Http\Controllers;

use App\Actor;
use App\ActorMovie;
use App\Movie;
use App\MovieType;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function list()
    {
        $movies = Movie::select('movies.id','movies.name as name_movie', 'movie_types.name as name_type')
        ->join('movie_types', 'movie_types.id', '=', 'movies.movie_types')
        ->get();

        $actors = Actor::select('actors.id', 'actors.name', 'actors.surname','actors_movies.movies_id')
        ->join('actors_movies', 'actors_movies.actor_id', '=', 'actors.id')
        ->get();
        return view('pages.movies.list', compact('movies', 'actors'));
    }

    public function create()
    {
        $typeMovies = MovieType::all();

        //Solo se muestra actores activos en el select
        $actors = Actor::where('status', 1)
        ->get();

        return view('pages.movies.create', compact('typeMovies','actors'));
    }

    public function store(Request $request)
    {
        try {

            $movie = new Movie();
            $movie->name = $request->name;
            $movie->movie_types = $request->type_id;
            $movie->status = 1;
            $movie->save();

            for ($i = 0; $i < count($request->actors_id); $i++) {

                $actorMovie = new ActorMovie();
                $actorMovie->actor_id  = $request->actors_id[$i];
                $actorMovie->movies_id   = $movie->id;
                $actorMovie->save();

            }

                alert()->success('Exitoso','Se actualizo correctamente');

            return redirect()->route('get_list_actors');

        }catch(\Exception $e) {
            alert()->error('Error','Ocurrio un error');

            return redirect()->route('get_list_actors');
        }
    }


}
