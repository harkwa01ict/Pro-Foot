<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobandActivitiesController extends Controller
{
    function get_jod_view(){
        return view ('job');
    }
}
