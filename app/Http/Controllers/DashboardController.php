<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Party;
use App\Models\Recommendation;
use App\Models\Invite;
use App\Models\Food;


class DashboardController extends Controller
{
    public function index(Recommendation $recommendation, Invite $invite, Food $food)
    {
        $party = Party::where('user_id', auth()->user()->id)->first();

        $invites = $invite->all();

        $recommendations = $recommendation->all();

        if($party)
        {
            $chosenFood = $food->find($party->food);

        } else
        {
            $chosenFood = null;
        }

        return view('dashboard', compact('recommendations', 'party', 'invites', 'chosenFood'));
    }

    public function deleteInvite(string|int $id)
    {
        if(!$invite = Invite::find($id))
        {
            return back();
        }

        $invite->delete();

        return back();
    }
}
