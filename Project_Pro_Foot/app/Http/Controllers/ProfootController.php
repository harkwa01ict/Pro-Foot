<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfootController extends Controller
{
   function Home_page(){
    return view('HomePage');
   }
}
