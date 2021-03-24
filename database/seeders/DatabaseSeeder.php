<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       // Product::factory(10)->create();
       // User::factory(10)->create();
       // $this->call(seeders_category::class);
        $this->call(seeders_product_category::class);
    }
}
