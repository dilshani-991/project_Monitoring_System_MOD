<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function armyHome()
    {
        if (Auth::user()->role !== 'army') {
            abort(403, 'Unauthorized action.');
        }
        return view('pages.dashboards.army_dashboard');
    }

    public function navyHome()
    {
        if (Auth::user()->role !== 'navy') {
            abort(403, 'Unauthorized action.');
        }
        return view('pages.dashboards.navy_dashboard');
    }

    public function airforceHome()
    {
        if (Auth::user()->role !== 'airforce') {
            abort(403, 'Unauthorized action.');
        }
        return view('pages.dashboards.airforce_dashboard');
    }
}


