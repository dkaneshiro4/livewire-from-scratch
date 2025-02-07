<?php

use App\Livewire\Search;
use App\Livewire\ShowArticle;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
//Route::get('/search', Search::class);
Route::get('/articles/{article}', ShowArticle::class);

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
