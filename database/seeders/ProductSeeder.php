<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::updateOrCreate(
            ['sku' => 'CAP-SBG-01'],
            [
                'name' => 'Saved by Grace Cap',
                'description' => 'Comfortable custom faith-inspired headwear.',
                'price' => 250.00,
                'stock_quantity' => 10,
                'category' => 'Hats'
            ]
        );

        Product::updateOrCreate(
            ['sku' => 'TEE-JIA-02'],
            [
                'name' => 'Jesus is Alive Tee',
                'description' => 'Premium cotton graphic tee.',
                'price' => 399.00,
                'stock_quantity' => 10,
                'category' => 'Apparel'
            ]
        );

        Product::updateOrCreate(
            ['sku' => 'TEE-TSC-03'],
            [
                'name' => "The Shepherd's Call",
                'description' => 'Minimalist embroidered apparel.',
                'price' => 299.00,
                'stock_quantity' => 4,
                'category' => 'Apparel'
            ]
        );
    }
}
