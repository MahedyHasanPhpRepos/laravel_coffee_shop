<?php

namespace Database\Factories\Product;

use App\Models\Product\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductFactory extends Factory
{

    protected $model = Product::class;

    public function definition(): array
    {
        return
            [
                'name' => "Coffee Capuccino",
                'image' => 'menu-1.jpg',
                'price' => '5.90',
                'description' => 'A small river named Duden flows by their place and supplies',
                'created_at' => \Carbon\Carbon::now()
            ];
    }
}
