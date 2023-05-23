<?php

namespace App\Http\Controllers;

use App\Models\TbNews_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Controllers\TbadminController;

class TbadminController extends Controller
{
     public function News_index()
{
    $news = TbNews_model::all();

return view('news.admin.admin_news',compact('news'));
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
   


return redirect()->route('route_store1')->with('success', 'News added successfully!');
}
}


