<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function userdashboard()
    {
        return view('pages.dashboards.user');
    }

    public function admindashboard()
    {
        return view('pages.dashboards.admin');
    }
}
