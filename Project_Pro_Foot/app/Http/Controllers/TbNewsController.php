<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\TbNews_model;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TbNewsController extends Controller
{
    public function news_index()
    {
        $news = TbNews_model::all();

        return view('news.news_index', compact('news'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'type' => 'required',
            'date_of_issuance' => 'required',
            'description' => 'required',
        ]);
        

        
       $user = TbNews_model::create([
        'type'=> $request->type,
        'date_of_issuance'=> $request->date_of_issuance,
        'description'=> $request->description
    
    ]);
    $user->save();
    
    return redirect()->route('route_store')->with('success', 'News added successfully!');
}
      
}




