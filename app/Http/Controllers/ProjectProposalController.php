<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectProposalController extends Controller
{
    public function index()
    {
        return view('pages.admin.project_proposal');
    }
}
