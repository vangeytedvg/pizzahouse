<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

/*
| First route added
 */
Route::get('/pizzas', function () {
    // Get data (mocked)
    // $pizza = [
    //     'type' => 'Pistolet',
    //     'base' => 'Cheesy',
    //     // Not important if we pass strings or numbers!
    //     'price' => 1,
    // ];
    // inject it in the view, {{}} syntax in there
    // return view('pizzas', $pizza);
    $pizzas = [
        ['type' => 'hawai', 'base' => 'cheese'],
        ['type' => 'mozadinges', 'base' => 'tomakken'],
        ['type' => 'salami', 'base' => 'ajoin']
    ];
    return view('pizzas', ['pizzas' => $pizzas]);
});
