<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectForm;

class AddProjectController extends Controller
{
    public function AddProjectForm()
    {
        return view('pages.admin.add-project');
    }

    public function FormStore(Request $request)
    {
        $request->validate([
            'category' => 'required|string|max:255',
            'projectId' => 'required|string|max:255',
            'projectName' => 'required|string|max:255',
            'submitBy' => 'required|string|max:255',
            'submitDate' => 'required|date',
            'closeDate' => 'required|date',
            'status' => 'required|string|max:255',
        ]);

        projectForm::create([
            'category' => $request->input('category'),
            'project_id' => $request->input('projectId'),
            'project_name' => $request->input('projectName'),
            'submitted_by' => $request->input('submitBy'),
            'submitted_date' => $request->input('submitDate'),
            'closing_date' => $request->input('closeDate'),
            'status' => $request->input('status'),
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Project added successfully!');
    }


}
