<?php

use Illuminate\Support\Facades\Route;

// Usa config() per caricare 'datax.php'
$datax = config('datax');

Route::get('/', function () use ($datax) {
    // Usa compact per passare i dati alla vista
    return view('home', compact('datax'));
})->name('home');

Route::get('/comics', function () use ($datax) {
    return view('comics', compact('datax'));
})->name('comics');

Route::get('/movies', function () use ($datax) {
    return view('movies', compact('datax'));
})->name('movies');

Route::get('/tv', function () use ($datax) {
    return view('tv', compact('datax'));
})->name('tv');

Route::get('/characters', function () use ($datax) {
    return view('characters', compact('datax'));
})->name('characters');

Route::get('/games', function () use ($datax) {
    return view('games', compact('datax'));
})->name('games');

Route::get('/collectibles', function () use ($datax) {
    return view('collectibles', compact('datax'));
})->name('collectibles');

Route::get('/videos', function () use ($datax) {
    return view('videos', compact('datax'));
})->name('videos');

Route::get('/fans', function () use ($datax) {
    return view('fans', compact('datax'));
})->name('fans');

Route::get('/news', function () use ($datax) {
    return view('news', compact('datax'));
})->name('news');

Route::get('/shop', function () use ($datax) {
    return view('shop', compact('datax'));
})->name('shop');