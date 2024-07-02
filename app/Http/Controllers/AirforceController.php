<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AirforceController extends Controller{

    public function airforcedashboard()
    {
        return view('pages.dashboards.airforce_dashboard');
    }
}
