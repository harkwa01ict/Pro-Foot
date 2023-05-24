<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\TbNews_model;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
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
/*
public function showFilteredNews()


    {
        $news_show = TbNews_model::where('type', 'Regular_News')

        // Filter by date (e.g., greater than current date)

            ->where('date_of_issuance', '>', Carbon::now()) 
            ->orderBy('date_of_issuance', 'asc')
            ->get();
    
        return view('news.news_index', ['news' => $news_show]);
    }
    

    public function eachlist(){
        $news=TbNews_model::select('type','date_of_issuance','description')->get();
        return view('/news/eachnews',compact('news'));

    }
*/

   /* public function show_more()
    {
        $news = TbNews_model::all();

        return view('news.show_more', compact('news'));
    }*/


     public function show_more(Request $request)
    {
        $news = TbNews_model::find($request->id);
       return view('news.show_more', compact('news'));
    }

    public function edit_news(Request $request)
    {
        $edit_news = TbNews_model::find($request->id);
       return view('news.admin.edit_news', compact('edit_news'));
    }

    public function update(Request $request)
    {
        $edit_news = TbNews_model::find($request->id);
        $input=$request->all();
        $edit_news->update($input);

       return view('news.admin.edit_news', compact('edit_news'));
    }


    public function destroy($id)
    {
        
        //$edit_news->destroy($id);
        edit_news::destroy($id);

       //return view('news.admin.admin_news', compact('edit_news'));
       return redirect('edit_news')->with('message','news deleted');
    }

}
      





