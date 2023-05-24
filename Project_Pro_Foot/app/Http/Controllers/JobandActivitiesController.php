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

    function read_more(Request $request){
       
        $job = jobModel::find($request->id);
        
        return view('jobdetail', compact('job'));
  
       }

       function get_activities_view(){
       
        return view ('activities');
    }

    function get_aboutus_view(){
       
        return view ('Aboutus');
    }

}
