<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    //controller admin che gestisce tutte le rotte della dashboard previo login

    public function index()
    {
        $projects = Project::count();
        return view('admin.home', compact('projects'));
    }
}
