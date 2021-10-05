@extends('front.layouts.master')
@section('title','Detay')
@section('content')

<div class="section detail-border">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="{{'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'] }}" alt="">
            </div>
            <div class="col-md-8">

                <div class="item-content-title">
                    {{ $movie['title'] }}
                </div>
                <div class="movie-infos ">
                    <div class="movie-info">
                        <i class="fas fa-star"></i>
                        <span> {{ $movie['vote_average'] }} | </span>
                    </div>
                    <div class="movie-info">
                        <i class="fas fa-clock"></i>
                        <span> {{ $movie['runtime'] }} dakika | </span>
                    </div>
                    <div class="movie-info">
                        <span>{{ $movie['release_date'] }} </span>
                    </div>

                </div>
                <br>
                <div class="section-header ">
                    Özet
                </div>
                <div class="item-content-description ">
                    {{ $movie['overview'] }}
                </div>
                <br>
                <div class="section-header ">
                    Featured Cast
                </div>
                <div class="item-content-description ">
                    <div class="d-flex flex-row bd-highlight mb-3">
                        @foreach ($movie['credits']['crew'] as $crew)
                        @if($loop->index<2) <div class="d-flex flex-column bd-highlight mb-3">
                            <div class="pe-2 bd-highlight"> {{ $crew['name'] }}</div>
                            <div class="pe-2 detail-info">{{ $crew['job'] }}</div>
                    </div>
                    @endif
                    @endforeach
                </div>
                @if (count($movie['videos']['results'])>0)
                    <div class="item-action">
                        <a href="https://www.youtube.com/watch?v={{ $movie['videos']['results'][0]['key'] }}"
                            class="video-btn btn-hover">
                            <i class="bx bxs-right-arrow"></i>
                            <span>Fragman</span>
                        </a>
                    </div>
                @endif

            </div>
        </div>

    </div>
</div>
</div>

<div class="section">
    <div class="container p-4">
        <div class="row">
            <div class="section-header">
                Kadro
            </div>
            @foreach ($movie['credits']['cast'] as $cast)
                @if($loop->index <12 && $cast['profile_path']==true)
                    <div class="col-md-3">
                        <div class="detail-actor-hover">
                            <div>
                                <figure><img src="{{'https://image.tmdb.org/t/p/w300/'.$cast['profile_path'] }}" /></figure>
                            </div>
                        </div>
                        <div class="item-content-description pt-1">
                            {{ $cast['name'] }}
                        </div>
                        <div class="detail-cast-name ">
                            {{ $cast['character'] }}
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

    </div>

</div>

<div class="section detail-border">
    <div class="container p-4">
        <div class="row">
            <div class="section-header">
                Resimler
            </div>
            @foreach ($movieImages['images']['backdrops'] as $image)
                @if($loop->index <9)
                    <div class="col-md-4">
                        <div class="detail-image-hover">
                            <div>
                                <figure><img src="{{'https://image.tmdb.org/t/p/w500/'.$image['file_path'] }}" /></figure>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

    </div>

</div>

@endsection
