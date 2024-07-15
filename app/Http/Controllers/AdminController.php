<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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

     // manage admin
     public function index()
        {
            $admins = User::where('role', 'admin')->get();

            return view('pages.admin.manage_admin', compact('admins'));
        }

    // project ptoposal
    public function ProjectProposal()
    {
        return view('pages.admin.project_proposal');
    }



        public function destroy($id)
        {
            $admin = User::find($id);
            if ($admin) {
                $admin->delete();
                return redirect()->route('manage-admin')->with('success', 'Admin removed successfully.');
            } else {
                return redirect()->route('manage-admin')->with('error', 'Admin  not found.');
            }
        }



}
