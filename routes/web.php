<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\CreateEditExpense;
use App\Livewire\ShowExpenses;
use App\Models\Expense;

// Route for dashboard page
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Route for showing all expenses (uses Livewire component ShowExpenses)
Route::get('expense', ShowExpenses::class)
    ->middleware(['auth', 'verified'])
    ->name('expense');

// Route for showing the create/edit expense page (handles optional id parameter for editing)
Route::get('createEditExpense/{id?}', CreateEditExpense::class)
    ->middleware(['auth', 'verified'])
    ->name('createEditExpense');

// Route for user profile page
Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
