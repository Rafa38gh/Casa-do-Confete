<?php

namespace App\Http\Controllers\Logins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OpsController extends Controller
{
    public function index()
    {
        return view('login/ops');
    }
}
