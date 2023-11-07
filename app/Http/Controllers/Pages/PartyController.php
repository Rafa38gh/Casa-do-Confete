<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePartyRequest;
use App\Models\Party;
use App\Models\Food;
use Illuminate\Http\Request;

class PartyController extends Controller
{
    public function index(Party $party)
    {  
        $parties = $party->all();
        /* dd($parties); */

        return view('cruds/parties/parties', compact('parties'));   /* Comando 'compact()' passa a variável $parties para a view */
    }

    public function create(Food $food)
    {
        $foods = $food->all();

        return view('cruds/parties/create', compact('foods'));
    }

    public function store(StorePartyRequest $request, Party $party)     /* Request pega todos os dados da requisição */
    {
        $data = $request->only(['name', 'age', 'invites', 'food', 'date']);

        $party = $party->create($data);

        return redirect()->route('dashboard');
    }

    public function destroy(string|int $id)     /* Recebe o id da festa epecífica a ser deletada */
    {
        if(!$party = Party::find($id))
        {
            return back();
        }

        $party->delete();

        return redirect()->route('admin.index');
    }
}
