<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\contracts\Foundation\Application;
use Illuminate\contracts\View\Factory;
use Illuminate\contracts\view\View;


class HomepageController extends Controller
{
    //
    public function index(Request $request):Factory|view|Application
    {
        return view('pages.homepage');
    }
}
