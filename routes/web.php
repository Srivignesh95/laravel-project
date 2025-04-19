<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ReviewController;

Route::get('/', function () {
    return redirect()->route('movies.index');
})->name('home');

Route::resource('movies', MovieController::class);
Route::resource('reviews', ReviewController::class);

require __DIR__.'/auth.php';