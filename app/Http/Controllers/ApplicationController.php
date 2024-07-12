<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectDetail;
use App\Models\Activity;


class ApplicationController extends Controller
{


    public function showProjectForm()
    {
        return view('pages.application.project_details');
    }

    public function showProjectobject()
    {
        return view('pages.application.project_objectives');
    }

    public function storeProjectDetails(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'sector' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'district' => 'required|string|max:255',
            'gs_division' => 'required|string|max:255',
            'gn_division' => 'required|string|max:255',
            'land_area' => 'required|string',
            'land_location' => 'required|string',
            'ownership_details' => 'required|string',
            'land_purchase' => 'required|string',
            'land_cost' => 'required|string',
        ]);

        // Save the validated data to the project_details table
        ProjectDetail::create($validatedData);

        // Redirect to the next page
        return redirect()->route('viewActivity');
    }

    public function showPreliminaryActivity()
    {
        return view('pages.application.preliminary _activities');
        // Ensure you have a view named 'next_page'
    }


    //project activity

    public function showActivity(Request $request)
    {
        $request->validate([
            'project_id' => 'required|exists:projects,id',
            'Pre-Feasibility' => 'nullable|string',
            'feasibility' => 'nullable|string',
            'detailed-design' => 'nullable|string',
            'sea' => 'nullable|string',
            'iee' => 'nullable|string',
            'eia' => 'nullable|string',
            'disaster-risk' => 'nullable|string',
            'nbro-clearance' => 'nullable|string',
            'archeological-clearance' => 'nullable|string',
            'land-clearance' => 'nullable|string',
            'social-impact' => 'nullable|string',
            'other' => 'nullable|string',
        ]);

        $activity = new Activity([
            'project_id' => $request->input('project_id'),
            'pre_feasibility' => $request->input('Pre-Feasibility'),
            'feasibility' => $request->input('feasibility'),
            'detailed_design' => $request->input('detailed-design'),
            'sea' => $request->input('sea'),
            'iee' => $request->input('iee'),
            'eia' => $request->input('eia'),
            'disaster_risk' => $request->input('disaster-risk'),
            'nbro_clearance' => $request->input('nbro-clearance'),
            'archeological_clearance' => $request->input('archeological-clearance'),
            'land_clearance' => $request->input('land-clearance'),
            'social_impact' => $request->input('social-impact'),
            'other' => $request->input('other'),
        ]);

        $activity->save();

        return redirect()->route('viewActivity');
    }







}



