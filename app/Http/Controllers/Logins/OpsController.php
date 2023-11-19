<?php

namespace App\Http\Controllers\Logins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Party;
use App\Models\Invite;

class OpsController extends Controller
{
    public function index(Party $party)
    {
        $parties = $party->all();

        return view('login/ops', compact('parties'));
    }

    public function show(string|int $id, Invite $invite)
    {
        if(!$party = Party::find($id))
        {
            return back();
        }

        $invites = $invite->all();

        return view('/cruds/parties/invites/show', compact('party', 'invites'));
    }
}
