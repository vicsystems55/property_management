<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;

use Carbon\Carbon;

use Auth;

class ProjectController extends Controller
{
    //

    public function create_project(Request $request)
    {
        # code...

        $request->validate([
            'project_name' => 'required',
            // 'amount' => 'required|numeric|min:99700|between:0,99.99',
            // 'number_of_accounts' => 'required|numeric|min:1|max:15',
            // 'file' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            
        ]);




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
