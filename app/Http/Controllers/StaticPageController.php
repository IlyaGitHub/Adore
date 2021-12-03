<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function main(){
        return view('pages.main');
    }

    public function faq(){
        return view('pages.faq');
    }

    public function contact(){
        return view('pages.contacts');
    }
}
