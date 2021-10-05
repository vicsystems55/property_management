<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;

use Auth;

class ProjectController extends Controller
{
    //

    public function create(Request $request)
    {
        # code...

        $client_id = Auth::user()->id;

        $project = Project::create([
            'project_name' => $request->project_name,
            'project_type_id' => $request->project_type_id,
            'client_id' => $client_id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'project_code' => Carbon::now()->format('d-m-Y').rand(1000,99999),
            'location' => $request->location,
            'budget' => $request->budget,
        ]);


        return redirect()->route('general.creation_success', [
            'project' => $project
        ]);
    }
}
