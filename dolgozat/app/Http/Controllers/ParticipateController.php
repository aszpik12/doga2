<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\participate;
use App\Models\User;
use Illuminate\Http\Request;

class ParticipateController extends Controller
{
    public function Put(Request $request){
        $event = new Event();
        $participate = new participate();
        $participate->event_id = '2';
        $participate->user_id;
        $event->date = '2023-12-05';
        $participate->present = $request->present;
        $event->agency_id;
        $event->limit = $request->limit;
        $event->save();
        $participate->save();
    }

    public function Get(Request $request){
        $participate = new Participate();
        $user = new User();
        $user -> name;
        $participate->present = $request->present;
        $user -> save();
        $participate->save();
    }
}
