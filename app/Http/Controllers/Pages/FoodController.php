<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Food;
use Illuminate\Http\Request;
use App\Http\Requests\StoreFoodRequest;
use App\Http\Requests\UpdateFoodRequest;

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

        return redirect()->route('admin.foods');
    }

    public function edit(string|int $id)
    {
        $food = Food::find($id);

        return view('/cruds/foods/edit', compact('food'));
    }

    public function update(UpdateFoodRequest $request, $id)
    {
        $food = Food::find($id);
        $food->name = $request->input('name');
        $food->body = $request->input('body');
        $food->drink = $request->input('drink');
        $food->price = $request->input('price');
        $food->save();

        return redirect()->route('admin.foods')->with('success', 'Cardápio atualizado com sucesso.');
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
