<?php

namespace App\Http\Controllers;

use App\Models\jobModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobandActivitiesController extends Controller
{
    function get_job_view(){
        $jobs = jobModel::All();
        return view ('job', compact('jobs'));
    }
}
