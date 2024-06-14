<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AirforceController extends Controller
{

    // dashboard function
    public function navydashboard()
    {
        return view('pages.navy.dashboard');
    }
}
