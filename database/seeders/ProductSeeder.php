<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product; // Import the Product model

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Add realistic product data
        Product::create([
            'name' => 'iPhone 15 Pro',
            'price' => 1199.00,
            'category' => 'Electronics', // This should match your database column name
        ]);

        Product::create([
            'name' => 'Samsung Galaxy S23',
            'price' => 999.00,
            'category' => 'Electronics',
        ]);
        Product::create([
            'name' => 'Sony WH-1000XM5 Headphones'
            , 'price' => 349.99, 
            'category' => 'Accessories'
        ]);
        Product::create([
            'name' => 'Anker 20W USB-C Charger',
             'price' => 19.99, 
             'category' => 'Accessories'
            ]);
        Product::create([
            'name' => 'Apple Watch Series 9',
             'price' => 429.00,
              'category' => 'Wearables'
            ]);
        Product::create([
            'name' => 'Samsung Galaxy Watch 6'
            , 'price' => 329.00, 
            'category' => 'Wearables'
        ]);
        Product::create([
            'name' => 'iPad Air (2023)', 
            'price' => 599.00, 
            'category' => 'Electronics'
        ]);
        Product::create([
            'name' => 'Dell XPS 13 Laptop', 
            'price' => 1499.00, 
            'category' => 'Electronics'
        ]);
        Product::create([
            'name' => 'Logitech MX Master 3S Mouse', 
            'price' => 99.99,
             'category' => 'Accessories'
            ]);
    }
}
