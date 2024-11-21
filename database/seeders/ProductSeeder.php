<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Apple Iphone 16 pro',
            'price' => 119000.00,
            'description' => 'Apple Product',
            'image' => 'iphoneImage.jpg',
        ]);

        Product::create([
            'name' => 'Samsung S24 Ultra',
            'price' => 128000.00,
            'description' => 'Samsung Product',
            'image' => 'SamsungImage.jpg',
        ]);

        Product::create([
            'name' => 'OnePlus Open',
            'price' => 149000.00,
            'description' => 'OnePlus Product',
            'image' => 'OnePlusImage.jpg',
        ]);
    }
}

