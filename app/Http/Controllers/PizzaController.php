<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

/**
 * Controller for pizzas
 */
class PizzaController extends Controller
{
    // Index
    public function index()
    {

        // Get the pizzas from the database!
        $pizzas = Pizza::all();
        // Order by multiple columns
        //$pizzas = Pizza::orderBy('price', 'asc')->orderBy('name')->get();
        // WHERE clause
        //$pizzas = Pizza::where('name', 'Molly')->get();
        // Latest added (based on timestamp)
        //$pizzas = Pizza::latest()->get();

        $name = request('name');
        $age = request('age');
        return view('pizzas.index', ['pizzas' => $pizzas,
            'name' => $name,
            'age' => $age,
        ]);
    }

    /**
     * Show a specific item
     */
    public function show($id)
    {
        // We get the order for $id
        $pizza = Pizza::findOrFail($id);
        // Pass it to the pizzas.show.blade.php view
        return view('pizzas.show', ['pizza' => $pizza]);
    }

    /**
     * Create a new pizza
     */
    public function create()
    {
        return view('pizzas.create');
    }
}
