<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ProjectType;

class ProjectTypeController extends Controller
{
    //

    public function create(Request $request)
    {
        # code...

        $featured_image = $request->file('featured_image');

        $new_name = rand().".".$doc->getClientOriginalExtension();

        $file1 = $featured_image->move(public_path('project_types_images'), $new_name);

        $project_type = ProjectType::create([
            'name' => $request->name,
            'category' => $request->category,
            'featured_image' => $new_name,
            'description' => $request->description,
            
        ]);

        return back()->with('project_type_msg', 'Project type description created');

    }
}
