<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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


}
