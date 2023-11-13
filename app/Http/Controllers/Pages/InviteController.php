<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInviteRequest;
use App\Models\Invite;
use App\Models\Party;
use Illuminate\Http\Request;

class InviteController extends Controller
{
    public function create(string|int $id)
    {
        $party = Party::find($id);

        if($party->status == 'aprovado')
        {
            return view('cruds/parties/invites/create', compact('party'));
        }

        abort(403);
    }

    public function store(StoreInviteRequest $request, Invite $invite, int $id)
    {
        $party = Party::find($id);

        $data = $request->only(['name', 'cpf', 'age']);
        $data['party_id'] = $id;

        $invite = $invite->create($data);

        return back();
    }
}
