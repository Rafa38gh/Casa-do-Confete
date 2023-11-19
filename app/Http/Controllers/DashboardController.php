<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Party;
use App\Models\Recommendation;
use App\Models\Invite;


class DashboardController extends Controller
{
    public function index(Recommendation $recommendation, Invite $invite)
    {
        $party = Party::where('user_id', auth()->user()->id)->first();

        $invites = $invite->all();

        $recommendations = $recommendation->all();

        return view('dashboard', compact('recommendations', 'party', 'invites'));
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
