<?php

namespace App\Http\Controllers;

use Cart;
use App\Models\ShopModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PanierController extends Controller
{
    function add(Request $request){

        $article = ShopModel::find($request->id);
        Cart::add(array(
            'id' => $article->id,
            'name' => $article->name,
            'price' =>$article->amount,
            'quantity' => $request->nombre,
            'attributes' => array('size' => $request->taille,
            'color' => $request->couleur),
            'associatedModel' =>$article->category
        ));
        return redirect()->route('route_toshoppanier');
    }

    function get_content(){

        $cart = Cart::getContent();
        //dd($cart);
        return view ('Panier', compact('cart'));
    }

    function get_message(){

        return view ('Paniermessage');
    }
}
