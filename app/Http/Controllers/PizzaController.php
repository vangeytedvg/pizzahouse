<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

/**
 * Controller for pizzas
 */
class PizzaController extends Controller
{

    // If not logged in, we get kicked to the login page
    public function __construct()
    {
        $this->middleware('auth');
    }

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

    /**
     * Store a pizza order
     */
    public function store()
    {
        // Handle the passed data, create instance of Pizza Model
        $pizza = new Pizza();
        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->price = 10;
        $pizza->toppings = request('toppings');
        // Commit
        $pizza->save();
        // After saving redirect to homepage, but with a
        // little trick...
        return redirect("/")->with("msg", "Thank you for ordering!");
    }

    public function destroy($id)
    {
        // Remove a record
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();
        // Go back to the list
        return redirect('/pizzas');
    }
}
