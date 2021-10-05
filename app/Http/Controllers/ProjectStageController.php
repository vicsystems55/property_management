<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectStageController extends Controller
{
    //

    public function create()
    {

        $featured_image = $request->file('image');

        $new_name = rand().".".$doc->getClientOriginalExtension();

        $file1 = $featured_image->move(public_path('project_stages_images'), $new_name);

        $project_stage = ProjectStage::create([
            'project_type_id' => $request->project_type_id,
            'percent_allocation' => $request->percent_allocation,
            'stage_name' => $request->stage_name,
            'image' => $new_name,
            'description' => $request->description,
        ]);


        return back()->with('project_stage_msg', 'Stage created');
        
        
    }



}
