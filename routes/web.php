<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('todos/', \App\Livewire\TodoApplication::class)
    ->middleware(['auth'])
    ->name('todos.default');

Route::get('todos/{list}', \App\Livewire\TodoApplication::class)
    ->middleware(['auth'])
    ->name('todos.index');

require __DIR__.'/auth.php';
