<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class PagesController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function food(Food $food)
    {
        $foods = $food->all();

        return view('site/cardapio', compact('foods'));
    }

    public function about()
    {
        return view('site/sobre');
    }
}
