<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Party;
use Illuminate\Http\Request;

class PartyController extends Controller
{
    public function index(Party $party)
    {  
        $parties = $party->all();
        /* dd($parties); */

        return view('cruds/parties/parties', compact('parties'));   /* Comando 'compact()' passa a variável $parties para a view */
    }

    public function create()
    {
        return view('cruds/parties/create');
    }

    public function store(Request $request, Party $party)     /* Request pega todos os dados da requisição */
    {
        $data = $request->only(['name', 'age', 'invites', 'food', 'date']);

        $party = $party->create($data);

        return redirect()->route('dashboard');
    }
}
