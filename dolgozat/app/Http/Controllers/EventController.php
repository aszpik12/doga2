<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function b(Request $request){
        $event = new Event();
        $event->event_id = $request->event_id;
        $event->date = $request->date;
        $event->agency_id = $request->agency_id;
        $event->limit = $request->limit;
        $event->save();
    }
}
