<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index(Food $food)
    {
        $foods = $food->all();

        return view('/cruds/foods/index', compact('foods'));
    }

    public function create()
    {
        return view('/cruds/foods/create');
    }

    public function store(Request $request, Food $food)
    {
        $data = $request->only(['name', 'body']);

        $food = $food->create($data);

        return redirect()->route('admin.index');
    }
}
