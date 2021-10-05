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


class AdminDashboardController extends Controller
{
  


    public function home()
    {
        //

        return view('admin.home');
    }

    public function members()
    {
        //

        return view('admin.members');
    }

    public function member($user_code)
    {
        //

        return view('admin.member');
    }

    public function requests()
    {
        //

        return view('admin.requests');
    }

    public function request()
    {
        //

        return view('admin.request');
    }

    public function notifications()
    {
        //

        return view('admin.notifications');
    }

    public function support()
    {
        //

        return view('admin.support');
    }

    public function settings()
    {
        //

        return view('admin.settings');
    }



    public function project_types()
    {

        $project_types = ProjectType::with('stages')->latest()->get();
        
        return view('general.project_types',[

            'project_types' => $project_types
            
        ]);
    }


}
