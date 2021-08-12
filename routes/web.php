<?php

use App\Http\Controllers\PizzaController;
use Illuminate\Support\Facades\Route;

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
