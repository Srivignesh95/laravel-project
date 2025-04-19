@extends('layout')

@section('content')
    <h1>All Movies</h1>
    @auth
        <a href="{{ route('movies.create') }}">+ Add New Movie</a><br><br>
    @endauth
    <ul class="movie-grid">
        @foreach ($movies as $movie)
            <li class="movie-card">
                <strong>{{ $movie->title }}</strong> ({{ $movie->release_year }}) <br>
                <strong>Genre:</strong> {{ $movie->genre }}<br>
                <strong>Network:</strong> {{ $movie->network }}<br>
                <strong>Rating:</strong> {{ $movie->rating }}/10<br>
                <strong>Description:</strong> {{ $movie->description }}<br>
                <strong>Cast:</strong> {{ $movie->cast }}<br><br>

                <a href="{{ route('movies.show', $movie->id) }}">View Details</a><br><br>

                @auth
                    <a href="{{ route('movies.edit', $movie->id) }}">Edit</a><br><br>

                    <form action="{{ route('movies.destroy', $movie->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete">
                    </form>
                @endauth
                <!--<br><strong>Reviews:</strong><br>
                <ul>
                    @foreach ($movie->reviews as $review)
                        <li>
                            <strong>{{ $review->user_name }}:</strong>
                            {{ $review->review_text }} ({{ $review->rating }}/5)
                        </li>
                    @endforeach
                </ul>
                <hr>-->
            </li>
        @endforeach
    </ul>
@endsection
