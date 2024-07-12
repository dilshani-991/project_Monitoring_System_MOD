<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ApplicationForm;

class ApplicationFormController extends Controller
{
    public function create()
    {
        return view('pages.application.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'project_title' => 'required|string|max:255',
            'sector' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'district' => 'required|string|max:255',
            'fileUpload' => 'required|file|mimes:doc,docx|max:2048'
        ]);

        // Handle file upload
        if ($request->hasFile('fileUpload')) {
            $fileName = time() . '_' . $request->file('fileUpload')->getClientOriginalName();
            $filePath = $request->file('fileUpload')->storeAs('uploads', $fileName, 'public');
        }

        // Save form data to the database
        ApplicationForm::create([
            'project_title' => $request->input('project_title'),
            'sector' => $request->input('sector'),
            'category' => $request->input('category'),
            'district' => $request->input('district'),
            'file_path' => '/storage/' . $filePath
        ]);

        return redirect()->route('project_form.create')->with('success', 'Project application submitted successfully!');
    }

    public function download($id)
    {
        $application = ApplicationForm::findOrFail($id);

        return Storage::download(str_replace('/storage/', '', $application->file_path));
    }
}
