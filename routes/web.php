<?php

use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('recipe', RecipeController::class);
});



require __DIR__.'/auth.php';
