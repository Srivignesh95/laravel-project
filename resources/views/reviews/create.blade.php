@extends('layout')

@section('title', 'Add Review')

@section('content')
    <div class="review-form-wrapper">
        <h2>Add a Review</h2>

        <form action="{{ route('reviews.store') }}" method="POST" class="review-form">
            @csrf

            <input type="hidden" name="movie_id" value="{{ $selectedMovieId }}">

            <div class="form-group">
                <label for="user_name">Your Name:</label>
                <input type="text" name="user_name" id="user_name" value="{{ old('user_name') }}" required>
            </div>

            <div class="form-group">
                <label for="review_text">Review:</label>
                <textarea name="review_text" id="review_text" rows="4" required>{{ old('review_text') }}</textarea>
            </div>

            <div class="form-group">
                <label for="rating">Rating (1 to 5):</label>
                <input type="number" name="rating" id="rating" min="1" max="5" value="{{ old('rating', 5) }}" required>
            </div>

            <button type="submit" class="submit-btn">Submit Review</button>
        </form>
    </div>
@endsection