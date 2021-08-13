<?php

use App\Http\Controllers\PizzaController;
use Illuminate\Support\Facades\Route;

/***
 *
 * GET routes
 *
 */

/**
 * Home page route
 */
Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

/*
| First route added, this calls the file PizzaController.php/index
 */
Route::get('/pizzas', [PizzaController::class, 'index'])->name('pizzas.index')->middleware('auth');

/**
 * Create route for pizzas
 */
Route::get('/pizzas/create', [PizzaController::class, 'create'])->name('pizzas.create');

/*
| Route wildcard, notice the function now takes a parameter.
 */
Route::get('/pizzas/{id}', [PizzaController::class, 'show'])->name('pizzas.show')->middleware('auth');

/***
 *
 * POST routes, starts at video 19/30
 *
 */

Route::post('/pizzas', [PizzaController::class, 'store'])->name('pizzas.store');

/**
 *
 * DELETE routes, video 22/30
 *
 */
Route::delete('/pizzas/{id}', [PizzaController::class, 'destroy'])->name('pizzas.destroy');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
