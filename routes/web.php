<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/choose', 'ChooseRoleController@index')->name('choose');

Route::get('/', 'ChooseRoleController@index')->name('choose');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::get('/my_works', function () {
    return view('my_works');
})->name('my_works');

Route::get('/login', function () {
    return view('login');
})->name('login');


Route::get('/sample', function () {
    return 123;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');



// admin routes

Route::group(['middleware' => ['auth', 'admin'],  'prefix' => 'admin'], function(){

    Route::get('/', 'AdminDashboardController@home')->name('admin.home');
    Route::get('/members', 'AdminDashboardController@members')->name('admin.members');
    Route::get('/member/{member_code}', 'AdminDashboardController@member')->name('admin.member');
    Route::get('/requests', 'AdminDashboardController@requests')->name('admin.proje');
    Route::get('/request/{id}', 'AdminDashboardController@request')->name('admin.request');
    Route::get('/notifications', 'AdminDashboardController@notifications')->name('admin.notifications');
    Route::get('/support', 'AdminDashboardController@support')->name('admin.support');
    Route::get('/settings', 'AdminDashboardController@settings')->name('admin.settings');

    Route::get('/project/{project_code}', 'AdminDashboardController@project')->name('admin.project');

    Route::get('/project_types', 'AdminDashboardController@project_types')->name('admin.project_types');

    Route::get('/ongoing_projects', 'AdminDashboardController@ongoing_projects')->name('admin.ongoing_projects');

    Route::get('/completed_projects', 'AdminDashboardController@completed_projects')->name('admin.completed_projects');

    Route::get('/paused_projects', 'AdminDashboardController@paused_projects')->name('admin.paused_projects');

    Route::get('/terminated_projects', 'AdminDashboardController@terminated_projects')->name('admin.terminated_projects');

});


// agent routes

Route::group(['middleware' => ['auth', 'agent'],  'prefix' => 'agent'], function(){

    Route::get('/', 'AgentDashboardController@home')->name('agent.home');
    Route::get('/assignments', 'AgentDashboardController@assignments')->name('agent.assignments');
    Route::get('/profile', 'AgentDashboardController@profile')->name('agent.profile');
    Route::get('/notifications', 'AgentDashboardController@notifications')->name('agent.notifications');

    Route::get('/project_types', 'AgentDashboardController@project_types')->name('agent.project_types');

    Route::get('/project/{project_code}', 'AgentDashboardController@project')->name('agent.project');

    Route::get('/ongoing_projects', 'AgentDashboardController@ongoing_projects')->name('agent.ongoing_projects');

    Route::get('/completed_projects', 'AgentDashboardController@completed_projects')->name('agent.completed_projects');

    Route::get('/paused_projects', 'AgentDashboardController@paused_projects')->name('agent.paused_projects');

    Route::get('/terminated_projects', 'AgentDashboardController@terminated_projects')->name('agent.terminated_projects');

    

});


//client route

Route::group(['middleware' => ['auth', 'user'],  'prefix' => 'user'], function(){

    Route::get('/', 'ClientDashboardController@home')->name('user.home');
    Route::get('/profile', 'ClientDashboardController@profile')->name('user.profile');
    Route::get('/notifications', 'ClientDashboardController@notifications')->name('user.notifications');
    Route::get('/ongoing_projects', 'ClientDashboardController@ongoing_projects')->name('user.ongoing_projects');
    Route::get('/create_project', 'ClientDashboardController@create_project')->name('user.create_project');

    Route::get('/project/{project_code}', 'ClientDashboardController@project')->name('user.project');

    Route::get('/creation_success', 'ClientDashboardController@creation_success')->name('general.creation_success');
    
    Route::get('/completed_projects', 'ClientDashboardController@completed_projects')->name('user.completed_projects');
    
    Route::get('/paused_projects', 'ClientDashboardController@paused_projects')->name('user.paused_projects');
    
    Route::get('/terminated_projects', 'ClientDashboardController@terminated_projects')->name('user.terminated_projects');

    Route::get('/project_details/{type}/{project_code}', 'ClientDashboardController@project_details')->name('user.project_details');

    Route::get('/project_types', 'ClientDashboardController@project_types')->name('user.project_types');


});

// Apis

//Posts

Route::post('/create_project', 'ProjectController@create_project')->name('create_project');

//create project

