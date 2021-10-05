<a href="{{ route('tv.show',$tv['id']) }}" class="movie-item">
    <img src="{{'https://image.tmdb.org/t/p/w500/'.$tv['poster_path'] }}" alt="poster">
    <div class="movie-item-content">
        <div class="movie-item-title">
            {{ $tv['name'] }}
        </div>
        <div class="movie-infos">
            <div class="movie-info">
                <i class="fas fa-star"></i>
                <span> {{ $tv['vote_average'] }}</span>
            </div>
            <div class="movie-info">
                <i class="fas fa-calendar"></i>
                <span>{{ \Carbon\Carbon::parse($tv['first_air_date'])->format('d/m/Y') }}</span>
            </div>
        </div>
            <div class="movie-info">
                <span>@foreach ($tv['genre_ids'] as $genre )
                    {{ $genresTv->get($genre) }} @if (!$loop->last) , @endif
                @endforeach</span>
            </div>
    </div>
</a>