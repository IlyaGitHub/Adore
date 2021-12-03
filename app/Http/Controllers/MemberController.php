<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index(){
        return view('pages.members')->with(['members' => User::whereNotNull('tariff_id')->get()]);
    }
}
