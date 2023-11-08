<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Party;
use App\Models\Recommendation;


class DashboardController extends Controller
{
    public function index(Recommendation $recommendation)
    {
        $party = Party::where('user_id', auth()->user()->id)->first();

        $recommendations = $recommendation->all();

        return view('dashboard', compact('recommendations', 'party'));
    }
}
