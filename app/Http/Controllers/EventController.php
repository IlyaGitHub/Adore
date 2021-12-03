<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        return view('pages.events')->with(['events' => Event::all()]);
    }

    public function show(Event $event){
        return view('pages.event')->with(['event' => $event]);
    }
}
