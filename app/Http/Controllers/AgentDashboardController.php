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

    public function ongoing_projects()
    {
        //

        $projects = Project::where('status', 'ongoing')->latest()->get();

        return view('general.ongoing_projects',[
            'projects' => $projects
        ]);
    }

    public function completed_projects()
    {
        //

        $projects = Project::where('status', 'completed')->latest()->get();

        return view('general.completed_projects',[
            'projects' => $projects
        ]);
    }

    public function paused_projects()
    {
        //

        $projects = Project::where('status', 'paused')->latest()->get();

        return view('general.paused_projects',[
            'projects' => $projects
        ]);
    }

    public function terminated_projects()
    {
        //

        $projects = Project::where('status', 'terminated')->latest()->get();

        return view('general.terminated_projects',[
            'projects' => $projects
        ]);
    }

    public function project($project_code)
    {
        //

        $project = Project::where('project_code', $project_code)->first();

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

        return view('agent.home');
    }


    public function notifications()
    {
        //
        $notifications = Notification::where('user_id', Auth::user()->id)->get();

        $notificationx = Notification::where('user_id', Auth::user()->id)->update([
            'status' => 'read'
        ]);

        return view('general.notifications',[
            'notifications' => $notifications
        ]);
    }


    public function assignments()
    {
        //

        return view('agent.assignments');
    }

    public function assignment()
    {
        //

        return view('agent.assignment');
    }


    public function profile()
    {
        //

        return view('agent.profile');
    }


}
