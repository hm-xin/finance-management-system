<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('expense', 'expense')
    ->middleware(['auth', 'verified'])
    ->name('expense');
Route::view('createEditExpense', 'createEditExpense')
    ->middleware(['auth', 'verified'])
    ->name('createEditExpense');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
