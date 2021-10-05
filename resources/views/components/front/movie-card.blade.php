<a href="{{ route('movies.show',$movie['id']) }}" class="movie-item">
    <img src="{{'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'] }}" alt="poster">
    <div class="movie-item-content">
        <div class="movie-item-title">
            {{ $movie['title'] }}
        </div>
        <div class="movie-infos">
            <div class="movie-info">
                <i class="fas fa-star"></i>
                <span> {{ $movie['vote_average'] }}</span>
            </div>
            <div class="movie-info">
                <i class="fas fa-calendar"></i>
                <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('d/m/Y') }}</span>
            </div>
        </div>
            <div class="movie-info">
                <span>@foreach ($movie['genre_ids'] as $genre )
                    {{ $genres->get($genre) }} @if (!$loop->last) , @endif
                @endforeach</span>
            </div>
    </div>
</a>