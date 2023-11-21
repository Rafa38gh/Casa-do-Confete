<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangeFoodRequest;
use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\Party;

class UpdateFoodController extends Controller
{
    public function index(Food $food, string|int $id)
    {
        $foods = $food->all();
        $party = $id;

        return view('cruds/parties/changeFood', compact('foods', 'party'));
    }

    public function update(ChangeFoodRequest $request, string|int $id)
    {
        $party = Party::find($id);
        $data = $request->all();

        $party->update($data);
        return redirect()->route('dashboard')->with('Cardápio alterado com sucesso!');
    }
}
