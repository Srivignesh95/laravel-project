<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    // Optional: if you're using soft deletes
    // use SoftDeletes;

    // Specify the table name (optional if it's the plural of the model name)
    protected $table = 'movies';

    // Mass assignable fields
    protected $fillable = [
        'title',
        'genre',
        'release_year',
        'network',
        'cast',
        'description',
        'rating',
        'poster_url',
    ];

    // A movie has many reviews
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
