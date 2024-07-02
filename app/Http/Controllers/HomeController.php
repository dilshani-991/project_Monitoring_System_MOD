<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('pages.dashboards.user');
    }

    public function adminHome()
    {
        return view('pages.dashboards.admin');
    }


    public function navyHome()
    {

        return view('pages.dashboards.navy_dashboard');
    }


    public function armyHome()
    {

        return view('pages.dashboards.army_dashboard');
    }


    public function airforceHome()
    {

        return view('pages.dashboards.airforce_dashboard');
    }




}
