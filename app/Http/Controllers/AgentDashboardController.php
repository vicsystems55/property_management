<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentDashboardController extends Controller
{
 
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
