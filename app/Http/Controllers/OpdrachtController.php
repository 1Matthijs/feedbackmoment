<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use Illuminate\Http\Request;

class OpdrachtController extends Controller
{
    public function show()
    {
    $name = "Matthijs Schoonen"; // Vervang "JouwNaam" door je eigen naam
    $fruits = Fruit::all(); // Alle Fruits ophalen
    return view('opdracht', compact('name', 'fruits'));
    }
}
