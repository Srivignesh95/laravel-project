@extends('layout')

@section('content')
<div class="movie-form-container">
    <h1>Add New Movie</h1>

    <form action="{{ route('movies.store') }}" method="POST" class="movie-form">
        @csrf

        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" required>
        </div>

        <div class="form-group">
            <label>Genre</label>
            <input type="text" name="genre" required>
        </div>

        <div class="form-group">
            <label>Release Year</label>
            <input type="number" name="release_year" required>
        </div>

        <div class="form-group">
            <label>Network</label>
            <input type="text" name="network">
        </div>

        <div class="form-group">
            <label>Cast</label>
            <input type="text" name="cast">
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea name="description" rows="3"></textarea>
        </div>

        <div class="form-group">
            <label>Rating (1–10)</label>
            <input type="number" step="0.1" name="rating">
        </div>

        <div class="form-group">
            <label>Poster URL</label>
            <input type="text" name="poster_url">
        </div>

        <div class="form-group">
            <button type="submit">Add Movie</button>
        </div>
    </form>
</div>
@endsection
