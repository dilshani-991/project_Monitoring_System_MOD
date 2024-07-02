<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArmyController extends Controller
{
    public function armydashboard()
    {
        return view('pages.dashboards.army_dashboard');
    }
}
