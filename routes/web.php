<?php

use App\Http\Controllers\KnapsackController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/knapsack', [KnapsackController::class, 'index'])->name('knapsack.index');
Route::post('/knapsack/solve', [KnapsackController::class, 'solveKnapsack'])->name('knapsack.solve');
