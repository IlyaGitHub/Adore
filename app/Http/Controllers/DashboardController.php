<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('personal-area.dashboard');
    }

    public function events(){
        return view('personal-area.events');
    }
}
