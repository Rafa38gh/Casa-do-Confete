<?php

namespace App\Http\Controllers\Logins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommController extends Controller
{
    public function index()
    {
        return view('login/comm');
    }
}
