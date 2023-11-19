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

    public function store(StoreInviteRequest $request, $id)
    {
        $party = Party::findOrFail($id);

        if($party->status !== 'aprovado')
        {
            abort(403);
        }

        foreach ($request->input('guests') as $guest) {
            $invite = new Invite([
                'party_id' => $party->id,
                'name' => $guest['name'],
                'cpf' => $guest['cpf'],
                'age' => $guest['age'],
            ]);

            $invite->save();
        }

        return redirect("/")->with("Convidados adicionados com sucesso!");
    }
}
