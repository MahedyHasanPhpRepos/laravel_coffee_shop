<?php

namespace Database\Seeders;

use App\Models\Product\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {

        Product::factory()->count(4)->create() ; 

        // return [
        //     'name' => "Coffee Capuccino",
        //     'image' => 'menu-1',
        //     'price' => '5.90',
        //     'description' => 'A small river named Duden flows by their place and supplies',
        //     'created_at' => \Carbon\Carbon::now()
        // ];
    }
}
