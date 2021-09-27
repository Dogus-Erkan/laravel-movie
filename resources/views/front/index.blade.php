@extends('front.layouts.master')
@section('title','Anasayfa')
@section('content')
<div class="hero-slide">
    <div class="owl-carousel carousel-nav-center" id="hero-carousel">
@foreach ($upcomingMovies as $upcomingMovie)
<div class="hero-slide-item">
    <img class="poster" src="{{'https://image.tmdb.org/t/p/original/'.$upcomingMovie['poster_path'] }}" alt="poster">
    <div class="overlay"></div>
    <div class="hero-slide-item-content">
        <div class="item-content-wraper">
            <div class="item-content-title top-down">
                {{ $upcomingMovie['title'] }}
            </div>
            <div class="movie-infos top-down delay-2">
                <div class="movie-info">
                    <i class="fas fa-star"></i>
                    <span>  {{ $upcomingMovie['vote_average'] }}</span>
                </div>
                <div class="movie-info">
                    <i class="fas fa-calendar"></i>
                    <span>{{ \Carbon\Carbon::parse($upcomingMovie['release_date'])->format('d/m/Y') }}</span>
                </div>
                <div class="movie-info">
                    <span>HD</span>
                </div>
                <div class="movie-info">
                    <span>@foreach ($upcomingMovie['genre_ids'] as $genre )
                        {{ $genres->get($genre) }} @if (!$loop->last) , @endif
                    @endforeach</span>
                </div>
            </div>
            <div class="item-content-description top-down delay-4">
                {{ $upcomingMovie['overview'] }}
            </div>

        </div>
    </div>
</div>
@endforeach
    </div>
</div>
<div class="top-movies-slide">
    <div class="owl-carousel" id="top-movies-slide">
     @foreach ($nowPlaying as $popularMovie )
     <div class="movie-item">
        <img src="{{'https://image.tmdb.org/t/p/w500/'.$popularMovie['poster_path'] }}" alt="poster">
        <div class="movie-item-content">
            <div class="movie-item-title">
                {{ $popularMovie['title'] }}
            </div>
            <div class="movie-infos">
                <div class="movie-info">
                    <i class="fas fa-star"></i>
                    <span> {{ $popularMovie['vote_average'] }}</span>
                </div>
                <div class="movie-info">
                    <i class="fas fa-calendar"></i>
                    <span>{{ \Carbon\Carbon::parse($popularMovie['release_date'])->format('d/m/Y') }}</span>
                </div>
            </div>
                <div class="movie-info">
                    <span>@foreach ($popularMovie['genre_ids'] as $genre )
                        {{ $genres->get($genre) }} @if (!$loop->last) , @endif
                    @endforeach</span>
                </div>
           
        </div>
    </div>
     @endforeach
       
 
    </div>
</div>
<div class="section">
    <div class="container-fluid p-4">
        <div class="section-header">
            Popüler Filmler
        </div>
        <div class="movies-slide carousel-nav-center owl-carousel">
            @foreach ($popularMovies as $movie )
            <x-front.movie-card :movie="$movie" :genres="$genres"/>
             @endforeach
        </div>
    </div>
</div>
<div class="section">
    <div class="container-fluid p-4">
        <div class="section-header">
            Popüler Diziler
        </div>
        <div class="movies-slide carousel-nav-center owl-carousel" id="popular-tv">
            @foreach ($popularTV as $tv )
            <x-front.t-v-card :tv="$tv" :genresTv="$genresTv"/>
             @endforeach
        </div>
    </div>
</div>



<div class="section">
    <div class="hero-slide-item">
        <img src="{{ asset("front/") }}/./images/transformer-banner.jpg" alt="">
        <div class="overlay"></div>
        <div class="hero-slide-item-content">
            <div class="item-content-wraper">
                <div class="section-header">
                    Günün Önerisi
                </div>
                <div class="item-content-title">
                    Transformer
                </div>
                <div class="movie-infos">
                    <div class="movie-info">
                        <i class="bx bxs-star"></i>
                        <span>9.5</span>
                    </div>
                    <div class="movie-info">
                        <i class="bx bxs-time"></i>
                        <span>120 mins</span>
                    </div>
                    <div class="movie-info">
                        <span>HD</span>
                    </div>
                    <div class="movie-info">
                        <span>16+</span>
                    </div>
                </div>
                <div class="item-content-description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, possimus eius. Deserunt non odit,
                    cum vero reprehenderit laudantium odio vitae autem quam, incidunt molestias ratione mollitia
                    accusantium, facere ab suscipit.
                </div>
                <div class="item-action">
                    <a href="#" class="btn btn-hover">
                        <i class="bx bxs-right-arrow"></i>
                        <span>Watch now</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
