<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePartyRequest;
use App\Http\Requests\UpdatePartyRequest;
use App\Models\Party;
use App\Models\Food;
use App\Models\Invite;
use Illuminate\Support\Facades\Auth;
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
        $userId = Auth::id();

        $data = $request->only(['name', 'age', 'invites', 'food', 'date']);
        $data['user_id'] = $userId;

        $party = $party->create($data);

        return redirect()->route('dashboard');
    }

    public function updateStatus(UpdatePartyRequest $request, string|int $id)
    {
        $party = Party::find($id);

        $data = $request->all();
        
        $party->update($data);

        return back();
    }

    public function destroy(string|int $id, Invite $invite)     /* Recebe o id da festa epecífica a ser deletada */
    {
        if(!$party = Party::find($id))
        {
            return back();
        }

        $invites = $invite->all();

        foreach($invites as $invites)
        {
            if($invites->party_id == $id)
            {
                $invites->delete();
            }
        }
        $party->delete();

        return back();
    }
}
