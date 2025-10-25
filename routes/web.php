<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IdeaController;

Route::get('/', function () {
    return view('welcome');
}) -> name('home');

Route::view('/about', 'about') -> name('about');
Route::view('/process', 'process') -> name('process');

Route::get('/ideas', [IdeaController::class, 'index'])->name('ideas');
Route::post('/ideas', [IdeaController::class, 'store'])->name('ideas.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
