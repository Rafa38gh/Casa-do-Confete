<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recommendation;

class DashboardController extends Controller
{
    public function index(Recommendation $recommendation)
    {
        $recommendations = $recommendation->all();


        return view('dashboard', compact('recommendations'));
    }
}
