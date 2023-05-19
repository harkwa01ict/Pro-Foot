<?php

namespace Database\Seeders;

use App\Models\categories;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $category = new categories();
        $category->category = 'T_Shirt';
        $category->is_online = 1;
        $category->save();

        $category = new categories();
        $category->category = 'Shuhe';
        $category->is_online = 1;
        $category->save();

        $category = new categories();
        $category->category = 'Short';
        $category->is_online = 1;
        $category->save();

        $category = new categories();
        $category->category = 'ball';
        $category->is_online = 1;
        $category->save();

        $category = new categories();
        $category->category = 'Kit';
        $category->is_online = 1;
        $category->save();


        $category = new categories();
        $category->category = 'Ensemble';
        $category->is_online = 1;
        $category->save();
    }
}
