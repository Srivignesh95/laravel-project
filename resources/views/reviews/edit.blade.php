@extends('layout')

@section('title', 'Edit Review')

@section('content')
<div class="review-edit-container">
    <h2>Edit Review</h2>

    <form method="POST" action="{{ route('reviews.update', $review) }}" class="review-edit-form">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Reviewer Name:</label>
            <input type="text" name="user_name" value="{{ old('user_name', $review->user_name) }}" required>
        </div>

        <div class="form-group">
            <label>Review Text:</label>
            <textarea name="review_text" required>{{ old('review_text', $review->review_text) }}</textarea>
        </div>

        <div class="form-group">
            <label>Rating:</label>
            <input type="number" name="rating" value="{{ old('rating', $review->rating) }}" min="1" max="5" required>
        </div>

        <div class="form-group">
            <label>Movie:</label>
            <select name="movie_id" required>
                @foreach($movies as $movie)
                    <option value="{{ $movie->id }}" {{ $movie->id == $review->movie_id ? 'selected' : '' }}>
                        {{ $movie->title }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <button type="submit">Update</button>
        </div>
    </form>
</div>
@endsection