<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3),
            'genre' => fake()->randomElement(['Action', 'Comedy', 'Drama', 'Horror', 'Thriller']),
            'release_year' => fake()->year(),
            'network' => fake()->company(),
            'cast' => fake()->name() . ', ' . fake()->name(),
            'description' => fake()->paragraph(),
            'rating' => fake()->randomFloat(1, 1, 10),
            'poster_url' => fake()->imageUrl(200, 300, 'movies', true, 'Poster'),
        ];
    }
}
