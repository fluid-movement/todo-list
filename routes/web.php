<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('todos/', \App\Livewire\Todos\TodoIndex::class)->name('todos.index');

require __DIR__.'/auth.php';
