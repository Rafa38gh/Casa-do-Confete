<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function admin()
    {
        return view('login/admin');
    }

    public function comm()
    {
        return view('login/commercial');
    }

    public function ops()
    {
        return view('login/ops');
    }
}
