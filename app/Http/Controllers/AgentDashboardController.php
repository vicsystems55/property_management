<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\AgentsAssignment;

use App\Media;

use App\User;

use App\Message;

use App\Notification;

use App\ProgressReport;

use App\Project;

use App\ProjectStage;

use App\ProjectType;

class AgentDashboardController extends Controller
{


    public function project_types()
    {

        $project_types = ProjectType::with('stages')->latest()->get();
        
        return view('general.project_types',[

            'project_types' => $project_types
            
        ]);
    }

 
    public function home()
    {
        //

        return view('client.home');
    }


    public function notifications()
    {
        //

        return view('client.notifications');
    }


    public function assignments()
    {
        //

        return view('client.assignments');
    }

    public function assignment()
    {
        //

        return view('client.assignment');
    }


    public function profile()
    {
        //

        return view('client.profile');
    }


}
