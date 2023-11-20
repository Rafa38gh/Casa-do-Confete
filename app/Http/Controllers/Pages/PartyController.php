<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePartyRequest;
use App\Http\Requests\UpdatePartyRequest;
use App\Models\Party;
use App\Models\Food;
use App\Models\Booking;
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

    public function create(Food $food, Booking $booking)
    {
        $foods = $food->all();
        $bookings = $booking->all();

        return view('cruds/parties/create', compact('foods', 'bookings'));
    }

    public function store(StorePartyRequest $request, Party $party, Booking $booking)     /* Request pega todos os dados da requisição */
    {
        $userId = Auth::id();

        $data = $request->only(['name', 'age', 'invites', 'food', 'date']);
        $data['user_id'] = $userId;

        $booking->where('date', $data['date'])->update(['status' => 'ocupado']);

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

    public function destroy(string|int $id, Invite $invite, Booking $booking)     /* Recebe o id da festa epecífica a ser deletada */
    {
        if(!$party = Party::find($id))
        {
            abort(404);
        }

        $invites = $invite->all();

        foreach($invites as $invites)
        {
            if($invites->party_id == $id)
            {
                $invites->delete();
            }
        }

        $booking->where('date', $party->date)->update(['status' => 'livre']);
        
        $party->delete();
        return back();
    }
}
