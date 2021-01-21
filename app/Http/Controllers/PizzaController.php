<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Add pizza model
use App\Models\Pizza;

class PizzaController extends Controller
{

 
  public function index() {
    // get data from a database
    // $pizzas = Pizza::all();
    $pizzas = Pizza::latest()->get();

    return view('pizzas.index', [
      'pizzas' => $pizzas,
    ]);
  }

  public function create() {
    return view('pizzas.create');
  }

  public function store() {
    // create a new instance of the Pizza model and store it in $pizza
    $pizza = new Pizza();
    $pizza->name = request('name');
    $pizza->type = request('type');
    $pizza->base = request('base');
    $pizza->toppings = request('toppings');

    // take the instance of the Pizza model and save to the db
    $pizza->save();

    // return redirect('/')->with('msg', 'Thanks for your order!');
    return redirect('/')->with(['message' => 'Thanks for your order!']);
  }

  public function show($id) {
    $pizza = Pizza::findOrFail($id);
    return view('pizzas.show', ['pizza' => $pizza]);
  }

  public function destroy($id) {
    $pizza = Pizza::findOrFail($id);
    $pizza->delete();

    return redirect('/pizzas')->with(['message' => 'Order marked as complete!']);
    // return redirect('/pizzas');
  }

  

}