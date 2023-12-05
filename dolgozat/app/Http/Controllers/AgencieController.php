<?php

namespace App\Http\Controllers;

use App\Models\Agencies;
use Illuminate\Http\Request;

class AgencieController extends Controller
{
    public function a(){
        return Agencies::with(['events', 'participates'])->get();
    }
}
