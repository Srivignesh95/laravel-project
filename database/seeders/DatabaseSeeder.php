<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Movie;
use App\Models\Review;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // Create a test user
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Create 10 random movies FIRST and store them
        $movies = Movie::factory(10)->create();

        // Now safely add 2–3 reviews per movie
        foreach ($movies as $movie) {
            Review::factory(fake()->numberBetween(2, 3))->create([
                'movie_id' => $movie->id,
            ]);
        }

        // Optional: Create one known movie and one known review
        $sampleMovie = Movie::factory()->create([
            'title' => 'Example Movie',
            'genre' => 'Thriller',
            'release_year' => 2025,
            'network' => 'Example Network',
            'cast' => 'John Doe, Jane Smith',
            'description' => 'A thrilling movie about an adventurous journey.',
            'rating' => 4.5,
            'poster_url' => 'https://example.com/poster.jpg',
        ]);

        Review::factory()->create([
            'movie_id' => $sampleMovie->id,
            'user_name' => 'Test Reviewer',
            'review_text' => 'This movie was fantastic! Highly recommend it.',
            'rating' => 4.8,
        ]);
    }
}
