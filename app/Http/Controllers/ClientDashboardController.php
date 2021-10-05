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

class ClientDashboardController extends Controller
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

    public function profile()
    {
        //
        return view('client.profile');
    }

    public function notifications()
    {
        //
        return view('client.notifications');
    }

    public function create_project()
    {
        //
        return view('client.create_project');
    }

    public function current_projects()
    {
        //
        return view('client.current_projects');
    }

    public function completed_projects()
    {
        //
        return view('client.completed_projects');
    }

    public function paused_projects()
    {
        //
        return view('client.paused_projects');
    }

    public function terminated_projects()
    {
        //
        return view('client.terminated_projects');
    }

    public function project_details($project_code)
    {
        //
        return view('client.project_details');
    }





}
