<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use App\Model\Product;
// use App\Model\Review;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        // factory(App\Models\Product::class,50)->create();
        \App\Models\User::factory()->count(10)->create(); 
        \App\Models\Product::factory()->count(50)->create();
        \App\Models\Review::factory()->count(300)->create(); 


        // factory(App\Models\Review::class,300)->create();
    }
}
