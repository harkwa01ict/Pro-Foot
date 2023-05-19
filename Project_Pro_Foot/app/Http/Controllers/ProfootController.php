<?php

namespace App\Http\Controllers;

use App\Models\ShopModel;
use App\Models\categories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfootController extends Controller
{
   function Home_page(){
    return view('HomePage');
   }

   function Shop_page(){

      //$produits = ShopModel::All();
      $produits = ShopModel::inRandomOrder()->paginate(9);
      //dd($produits);
      return view('Shop', compact('produits'));
     }

     function shopArticle(Request $request){
       
      $produits = ShopModel::find($request->id);
      //dd($produits);
      $articleexpo = ShopModel::inRandomOrder()->limit(3)->get();
      //$categories = categories::where('is_online', 1)->get();
      //dd($categories);
      return view('ShopArticle', compact('produits', 'articleexpo'));

     }

     function shopCategory(Request $request){
       
     $shopcategories = ShopModel::where('category_id', $request->id)->paginate(9);
      return view('ShopCategories', compact('shopcategories'));

     }


     //this is the restaurant controller

     function Restaurant_page(){
      return view('Restaurant');
     }
}
