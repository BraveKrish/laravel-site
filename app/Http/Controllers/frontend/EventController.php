<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        return view("Frontend.events");
    }

    public function EventDetail(){
        return view("Frontend.event_details");
    }
}
