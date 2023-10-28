<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product; 

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = [ 
            [
                'name' => 'Bag',
                'description' => 'Cute Crossbody Bag',
                'image' => 'images/bag.jpeg',
                'price' => 19.99
            ],
            [
                'name' => 'Clock',
                'description' => 'Cute Alarm Clock',
                'image' => 'images/clock.jpeg',
                'price' => 29.99
            ],
            [
                'name' => 'Camera',
                'description' => 'Cute Camera',
                'image' => 'images/camera.jpeg',
                'price' => 14.99
            ],
            [
                'name' => 'Coffee Machine',
                'description' => 'Cute Coffee Machine',
                'image' => 'images/coffee-machine.jpeg',
                'price' => 55.00
            ],
            [
                'name' => 'Keyboard',
                'description' => 'Cute Space Keyboard',
                'image' => 'images/keyboard.jpeg',
                'price' => 17.99
            ],  
            [
                'name' => 'Water Bottle',
                'description' => 'Cute Water Bottle',
                'image' => 'images/water-bottle.jpeg',
                'price' => 10.99
            ],
        ];

        foreach ($product as $key => $value) {
            Product::create($value); 
        }
    }
}
