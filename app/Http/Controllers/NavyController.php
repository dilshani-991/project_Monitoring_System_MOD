<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavyController extends Controller
{
    // dashboard
    public function navydashboard()
    {
        return view('pages.navy.dashboard');
    }
}
