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
});

/*
| First route added, this calls the file PizzaController.php/index
 */
Route::get('/pizzas', [PizzaController::class, 'index']);

/**
 * Create route for pizzas
 */
Route::get('/pizzas/create', [PizzaController::class, 'create']);

/*
| Route wildcard, notice the function now takes a parameter.
 */
Route::get('/pizzas/{id}', [PizzaController::class, 'show']);

/***
 *
 * POST routes, starts at video 19/30
 *
 */

Route::post('/pizzas', [PizzaController::class, 'store']);
