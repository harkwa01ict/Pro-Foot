<?php

namespace Database\Seeders;

use App\Models\ShopModel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $produit = new ShopModel();
        $produit->name = "ball1";
        $produit->amount = "30.99";
        $produit->image = "imageShop/ball1.jpg";
        $produit->category = "ball";
        $produit->description = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries. but also the leap into electronic typesetting. remaining essentially unchanged. It was popularised in";
        $produit->category_id = 4;
        $produit->save();

        $produit = new ShopModel();
        $produit->name = "ball2";
        $produit->amount = "35.99";
        $produit->image = "imageShop/ball2.jpg";
        $produit->category = "ball";
        $produit->description = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries. but also the leap into electronic typesetting. remaining essentially unchanged. It was popularised in";
        $produit->category_id = 4;
        $produit->save();

        $produit = new ShopModel();
        $produit->name = "ball3";
        $produit->amount = "33.99";
        $produit->image = "imageShop/ball3.jpg";
        $produit->category = "ball";
        $produit->description = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries. but also the leap into electronic typesetting. remaining essentially unchanged. It was popularised in";
        $produit->category_id = 4;
        $produit->save();

        $produit = new ShopModel();
        $produit->name = "T_Shirt1";
        $produit->amount = "70.99";
        $produit->image = "imageShop/Tshit1.jpg";
        $produit->category = "T_Shirt";
        $produit->description = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries. but also the leap into electronic typesetting. remaining essentially unchanged. It was popularised in";
        $produit->category_id = 1;
        $produit->save();

        $produit = new ShopModel();
        $produit->name = "T_Shirt2";
        $produit->amount = "60.99";
        $produit->image = "imageShop/Tshit2.jpg";
        $produit->category = "T_Shirt";
        $produit->description = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries. but also the leap into electronic typesetting. remaining essentially unchanged. It was popularised in";
        $produit->category_id = 1;
        $produit->save();

        $produit = new ShopModel();
        $produit->name = "T_Shirt3";
        $produit->amount = "63.99";
        $produit->image = "imageShop/Tshit3.jpg";
        $produit->category = "T_Shirt";
        $produit->description = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries. but also the leap into electronic typesetting. remaining essentially unchanged. It was popularised in";
        $produit->category_id = 1;
        $produit->save();

        $produit = new ShopModel();
        $produit->name = "T_Shirt4";
        $produit->amount = "78.99";
        $produit->image = "imageShop/Tshit4.jpg";
        $produit->category = "T_Shirt";
        $produit->description = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries. but also the leap into electronic typesetting. remaining essentially unchanged. It was popularised in";
        $produit->category_id = 1;
        $produit->save();

        $produit = new ShopModel();
        $produit->name = "T_Shirt5";
        $produit->amount = "65.99";
        $produit->image = "imageShop/Tshit5.jpg";
        $produit->category = "T_Shirt";
        $produit->description = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries. but also the leap into electronic typesetting. remaining essentially unchanged. It was popularised in";
        $produit->category_id = 1;
        $produit->save();

        $produit = new ShopModel();
        $produit->name = "T_Shirt6";
        $produit->amount = "72.99";
        $produit->image = "imageShop/Tshit6.jpg";
        $produit->category = "T_Shirt";
        $produit->description = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries. but also the leap into electronic typesetting. remaining essentially unchanged. It was popularised in";
        $produit->category_id = 1;
        $produit->save();

        $produit = new ShopModel();
        $produit->name = "T_Shirt7";
        $produit->amount = "72.99";
        $produit->image = "imageShop/tshit7.jpg";
        $produit->category = "T_Shirt";
        $produit->description = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries. but also the leap into electronic typesetting. remaining essentially unchanged. It was popularised in";
        $produit->category_id = 1;
        $produit->save();

        $produit = new ShopModel();
        $produit->name = "Shuhe1";
        $produit->amount = "130.99";
        $produit->image = "imageShop/schuhe1.jpg";
        $produit->category = "Shuhe";
        $produit->description = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries. but also the leap into electronic typesetting. remaining essentially unchanged. It was popularised in";
        $produit->category_id = 2;
        $produit->save();

        $produit = new ShopModel();
        $produit->name = "Shuhe2";
        $produit->amount = "230.99";
        $produit->image = "imageShop/schuhe2.jpg";
        $produit->category = "Shuhe";
        $produit->description = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries. but also the leap into electronic typesetting. remaining essentially unchanged. It was popularised in";
        $produit->category_id = 2;
        $produit->save();

        $produit = new ShopModel();
        $produit->name = "Shuhe3";
        $produit->amount = "160.99";
        $produit->image = "imageShop/schuhe3.jpg";
        $produit->category = "Shuhe";
        $produit->description = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries. but also the leap into electronic typesetting. remaining essentially unchanged. It was popularised in";
        $produit->category_id = 2;
        $produit->save();

        $produit = new ShopModel();
        $produit->name = "Shuhe4";
        $produit->amount = "190.99";
        $produit->image = "imageShop/schuhe4.jpg";
        $produit->category = "Shuhe";
        $produit->description = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries. but also the leap into electronic typesetting. remaining essentially unchanged. It was popularised in";
        $produit->category_id = 2;
        $produit->save();

        $produit = new ShopModel();
        $produit->name = "Short1";
        $produit->amount = "50.99";
        $produit->image = "imageShop/short1.jpg";
        $produit->category = "Schort";
        $produit->description = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries. but also the leap into electronic typesetting. remaining essentially unchanged. It was popularised in";
        $produit->category_id = 3;
        $produit->save();

        $produit = new ShopModel();
        $produit->name = "Short2";
        $produit->amount = "45.99";
        $produit->image = "imageShop/short2.jpg";
        $produit->category = "Schort";
        $produit->description = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries. but also the leap into electronic typesetting. remaining essentially unchanged. It was popularised in";
        $produit->category_id = 3;
        $produit->save();

        $produit = new ShopModel();
        $produit->name = "Ensemble1";
        $produit->amount = "130.99";
        $produit->image = "imageShop/ensemble1.jpg";
        $produit->category = "Ensemble";
        $produit->description = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries. but also the leap into electronic typesetting. remaining essentially unchanged. It was popularised in";
        $produit->category_id = 6;
        $produit->save();

        $produit = new ShopModel();
        $produit->name = "Ensemble2";
        $produit->amount = "140.99";
        $produit->image = "imageShop/ensemble2.jpg";
        $produit->category = "Ensemble";
        $produit->description = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries. but also the leap into electronic typesetting. remaining essentially unchanged. It was popularised in";
        $produit->category_id = 6;
        $produit->save();

        $produit = new ShopModel();
        $produit->name = "Kit1";
        $produit->amount = "330.99";
        $produit->image = "imageShop/kit1.jpg";
        $produit->category = "Kit";
        $produit->description = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries. but also the leap into electronic typesetting. remaining essentially unchanged. It was popularised in";
        $produit->category_id = 5;
        $produit->save();

        $produit = new ShopModel();
        $produit->name = "Kit2";
        $produit->amount = "430.99";
        $produit->image = "imageShop/kit2.jpg";
        $produit->category = "Kit";
        $produit->description = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries. but also the leap into electronic typesetting. remaining essentially unchanged. It was popularised in";
        $produit->category_id = 5;
        $produit->save();
    }
}
