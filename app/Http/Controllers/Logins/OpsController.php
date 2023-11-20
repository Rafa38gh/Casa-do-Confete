<?php

namespace App\Http\Controllers\Logins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Party;
use App\Models\Invite;
use App\Models\Food;

class OpsController extends Controller
{
    public function index(Party $party)
    {
        $parties = $party->all();

        return view('login/ops', compact('parties'));
    }

    public function show(string|int $id, Invite $invite, Food $food)
    {
        if(!$party = Party::find($id))
        {
            abort(404);
        }

        $chosenFood = $food->find($party->food);
        $invites = $invite->all();

        return view('/cruds/parties/invites/show', compact('party', 'invites', 'chosenFood'));
    }
}
