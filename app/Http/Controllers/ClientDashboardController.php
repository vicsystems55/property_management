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

use Auth;

class ClientDashboardController extends Controller
{

    public function ongoing_projects()
    {
        //
        $user_id = Auth::user()->id;

        $projects = Project::where('client_id', $user_id)->where('status', 'ongoing')->latest()->get();

        return view('general.ongoing_projects',[
            'projects' => $projects
        ]);
    }

    public function completed_projects()
    {
        //
        $user_id = Auth::user()->id;

        $projects = Project::where('client_id', $user_id)->where('status', 'completed')->latest()->get();

        return view('general.completed_projects',[
            'projects' => $projects
        ]);
    }

    public function paused_projects()
    {
        //

        $user_id = Auth::user()->id;

        $projects = Project::where('client_id', $user_id)->where('status', 'paused')->latest()->get();

        return view('general.paused_projects',[
            'projects' => $projects
        ]);
    }

    public function terminated_projects()
    {
        //
        $user_id = Auth::user()->id;

        $projects = Project::where('client_id', $user_id)->where('status', 'terminated')->latest()->get();

        return view('general.terminated_projects',[
            'projects' => $projects
        ]);
    }

    public function project($project_code)
    {
        //
        $user_id = Auth::user()->id;

        $project = Project::where('client_id', $user_id)->where('project_code', $project_code)->first();

        // dd($project);

        return view('general.project',[
            'project' => $project
        ]);
    }


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
        $notifications = Notification::where('user_id', Auth::user()->id)->get();

        $notificationx = Notification::where('user_id', Auth::user()->id)->update([
            'status' => 'read'
        ]);
        return view('general.notifications',[
            'notifications'
        ]);
    }

    public function create_project()
    {
        //

        $project_types = ProjectType::with('stages')->latest()->get();

        return view('client.create_project',[
            'project_types' => $project_types
        ]);
    }

    public function creation_success()
    {
        
        return view('general.creation_success');
    }

    public function current_projects()
    {
        //
        return view('client.current_projects');
    }




    public function project_details($project_code)
    {
        //
        return view('client.project_details');
    }





}
