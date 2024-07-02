<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavyController extends Controller
{
    public function navydashboard()
    {
        // Your logic here
        return view('pages.dashboards.navy_dashboard');
    }
}


