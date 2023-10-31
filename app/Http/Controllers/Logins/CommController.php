<?php

namespace App\Http\Controllers\Logins;

use App\Http\Controllers\Controller;
use App\Models\Party;
use Illuminate\Http\Request;

class CommController extends Controller
{
    public function index(Party $party)
    {
        $parties = $party->all();
        return view('comm/index', compact('parties'));      /* Comando 'compact()' passa a variável $parties para a view */
    }
}
