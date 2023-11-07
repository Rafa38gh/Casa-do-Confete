<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Food;
use Illuminate\Http\Request;
use App\Http\Requests\StoreFoodRequest;

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

    public function store(StoreFoodRequest $request, Food $food)
    {
        $data = $request->only(['name', 'body', 'drink', 'price']);

        $food = $food->create($data);

        return redirect()->route('admin.index');
    }

    public function destroy(string|int $id)
    {
        if(!$food = Food::find($id))
        {
            return back();
        }

        $food->delete();

        return redirect()->route('admin.foods');
    }
}
