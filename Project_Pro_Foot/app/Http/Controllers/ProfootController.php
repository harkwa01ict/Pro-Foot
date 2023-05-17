<?php

namespace App\Http\Controllers;

use App\Models\ShopModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfootController extends Controller
{
   function Home_page(){
    return view('HomePage');
   }

   function Shop_page(){

      //$produits = ShopModel::All();
      $produits = ShopModel::inRandomOrder()->get();
      //dd($produits);
      return view('Shop', compact('produits'));
     }

     function shopArticle(Request $request){
       
      $produits = ShopModel::find($request->id);
      //dd($produits);
      $articleexpo = ShopModel::inRandomOrder()->limit(3)->get();
      return view('ShopArticle', compact('produits'), compact('articleexpo'));

     }
}
