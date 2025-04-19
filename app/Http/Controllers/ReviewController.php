<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Http\Requests\StoreReviewRequest;
use App\Http\Requests\UpdateReviewRequest;
use App\Models\Movie;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = Review::with('movie')->get();
        return view('reviews.index', compact('reviews'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $movies = Movie::all();
        $selectedMovieId = request()->query('movie_id');

        return view('reviews.create', compact('selectedMovieId'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReviewRequest $request)
    {
        $review = Review::create($request->validated());

        logger('Created Review:', $review->toArray()); // Debugging

        return redirect()->route('movies.show', $review->movie_id)
            ->with('success', 'Review submitted successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        return view('reviews.show', compact('review'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        $movies = Movie::all();
        return view('reviews.edit', compact('review', 'movies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReviewRequest $request, Review $review)
    {
        $review->update($request->validated());

        return redirect()
            ->route('movies.show', $review->movie_id)
            ->with('success', 'Review updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */  public function destroy(Review $review)
    {
        $movieId = $review->movie_id;
        $review->delete();
    
        return redirect()
            ->route('movies.show', $movieId)
            ->with('success', 'Review deleted successfully!');
    }
}
