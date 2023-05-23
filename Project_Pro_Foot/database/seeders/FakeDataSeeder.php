<?php

namespace Database\Seeders;

use Faker\Factory as Faker;



use Illuminate\Database\Seeder;
use Database\Seeders\FakeDataSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FakeDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $faker = Faker::create();

        for ($i = 0; $i < 5; $i++) {
            DB::table('tb_news_models')->insert([
                'type' => $faker->randomElement(['Breking_News', 'Regular_News']),
                'date_of_issuance' => $faker->date_of_issuance(),
                'description' => $faker->description(),
            ]);
    

    }
}
}