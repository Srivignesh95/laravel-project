@extends('layout')

@section('content')
<div class="movie-edit-container">
    <h1>Edit Movie: {{ $movie->title }}</h1>

    <form action="{{ route('movies.update', $movie->id) }}" method="POST" class="movie-edit-form">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" value="{{ $movie->title }}" required>
        </div>

        <div class="form-group">
            <label>Genre</label>
            <input type="text" name="genre" value="{{ $movie->genre }}" required>
        </div>

        <div class="form-group">
            <label>Release Year</label>
            <input type="number" name="release_year" value="{{ $movie->release_year }}" required>
        </div>

        <div class="form-group">
            <label>Network</label>
            <input type="text" name="network" value="{{ $movie->network }}">
        </div>

        <div class="form-group">
            <label>Cast</label>
            <input type="text" name="cast" value="{{ $movie->cast }}">
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea name="description" rows="3">{{ $movie->description }}</textarea>
        </div>

        <div class="form-group">
            <label>Rating (1–10)</label>
            <input type="number" step="0.1" name="rating" value="{{ $movie->rating }}">
        </div>

        <div class="form-group">
            <label>Poster URL</label>
            <input type="text" name="poster_url" value="{{ $movie->poster_url }}">
        </div>

        <div class="form-group">
            <button type="submit">Update Movie</button>
        </div>
    </form>
</div>
@endsection