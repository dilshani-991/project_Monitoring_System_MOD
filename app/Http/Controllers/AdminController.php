<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use App\Models\ApplicationForm;

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



// project proposal
public function ProjectProposal()
{
    $applications = ApplicationForm::all();
    return view('pages.admin.project_proposal',compact('applications'));
}

public function downloadProposal($id)
    {
        // Your logic to handle the file download
        // For example, find the proposal by its ID and return the file

        $proposal = Proposal::find($id);

        if ($proposal) {
            // Assuming the file is stored in the 'storage/app/public/proposals' directory
            $filePath = storage_path('app/public/proposals/' . $proposal->file_name);

            if (file_exists($filePath)) {
                return response()->download($filePath);
            } else {
                return redirect()->back()->with('error', 'File not found.');
            }
        } else {
            return redirect()->back()->with('error', 'Proposal not found.');
        }
    }



}
