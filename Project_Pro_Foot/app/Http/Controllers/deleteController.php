<?php

namespace App\Http\Controllers;

use App\Models\deleteModel;
use app\Models\TbNews_model;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class deleteController extends Controller
{
    //DELETE   FROM `tb_news_models` WHERE 0



    public function destroy($id)
    {
        // Find the news item by ID and delete it
        $news = deleteModel::findOrFail($id);
        $news->delete();
    
        // Redirect to a success page or return a response
        // For example:
        return redirect()->route('news.news_index')->with('success', 'News item deleted successfully.');
    }
    

}
