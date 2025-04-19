<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Review extends Model
{
    use HasFactory;
    // Optional: specify the table name (only if it doesn't match the plural of the model)
    // protected $table = 'reviews';

    // Mass assignable fields
    protected $fillable = [
        'movie_id',
        'user_name',
        'review_text',
        'rating',
    ];

    // Define the relationship to Movie
    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
