<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    function get_api(){
        $client = new Client();
        $response = $client->get('https://restcountries.com/v3.1/all');
        $countries = json_decode($response->getBody(), true);

        return view('Api', ['countries' => $countries]);
    }
    function post(Request $request){
        $request->validate([
            'name'=> 'required|string|max:250',
            'email'=> 'required|string|max:250',
        ]);
        return redirect()->route('route_apisucces');
    }

    function get_apisucces(){

        return view('Apisuccess');
    }

}
