<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $popularMovies=Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/movie/popular?language=tr-TR')
        ->json()['results'];
        $nowPlaying=Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/movie/now_playing?language=tr-TR')
        ->json()['results'];
        $upcomingMovies=Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/movie/upcoming?language=tr-TR')
        ->json()['results'];
        $popularTV=Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/tv/popular?language=tr-TR')
        ->json()['results'];
        $genresArray=Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/genre/movie/list?language=tr-TR')
        ->json()['genres'];
        $genresTvArray=Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/genre/tv/list?language=tr-TR')
        ->json()['genres'];

        $genres=collect($genresArray)->mapWithKeys(function ($genre){
            return [$genre['id']=>$genre['name']];
        });
        $genresTv=collect($genresTvArray)->mapWithKeys(function ($genre){
            return [$genre['id']=>$genre['name']];
        });
       return view('front.index',[
           'popularMovies' =>$popularMovies,
           'nowPlaying' =>$nowPlaying,
           'upcomingMovies' =>$upcomingMovies,
           'popularTV' =>$popularTV,
           'genres' => $genres,
           'genresTv' => $genresTv,
       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie=Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/movie/'.$id.'?language=tr-TR&append_to_response=videos,credits,images')
        ->json();
        $movieImages=Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/movie/'.$id.'?append_to_response=videos,credits,images')
        ->json();
        dump($movie);
        return view('front.detail', [
            'movie' =>$movie,
            'movieImages' =>$movieImages,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
