<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // add project function
    public function AddProjectForm()
    {
        return view('pages.admin.add_project');
    }

    // view project function
    public function ViewProjectForm()
    {
        return view('pages.admin.view_projects');
    }

    // Manage Admin function
    public function ManageAdminForm()
    {
        return view('pages.admin.manage_admin');
    }
    // Manage user function
    public function ManageUserForm()
    {
        return view('pages.admin.manage_user');
    }
}
