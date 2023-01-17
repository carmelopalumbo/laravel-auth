<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    //controller admin che gestisce tutte le rotte della dashboard previo login

    public function index()
    {
        return view('admin.home');
    }
}
