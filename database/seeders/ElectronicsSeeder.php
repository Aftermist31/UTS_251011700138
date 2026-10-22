<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ElectronicsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('electronics')->insert([
            [
                'name' => 'Blush Breeze Mini Fan',
                'brand' => 'DYNARA',
                'specs' => 'Kipas angin portable mini warna pink dengan desain ringkas',
                'price' => 89000,
                'image' => 'kipas-pink.jpg',
                'category' => 'Home & Lifestyle',
            ],
            [
                'name' => 'Veloura Smartwatch',
                'brand' => 'DYNARA',
                'specs' => 'Smartwatch warna burgundy dengan layar digital',
                'price' => 299000,
                'image' => 'smartwatch-burgundy.jpg',
                'category' => 'Wearable',
            ],
            [
                'name' => 'Ivory Smartwatch',
                'brand' => 'DYNARA',
                'specs' => 'Smartwatch warna putih dengan desain minimalis',
                'price' => 279000,
                'image' => 'smartwatch-white.jpg',
                'category' => 'Wearable',
            ],
            [
                'name' => 'Noire Burgundy Headphones',
                'brand' => 'DYNARA',
                'specs' => 'Headphone over-ear burgundy dengan bantalan empuk',
                'price' => 349000,
                'image' => 'headphone-burgundy.jpg',
                'category' => 'Audio',
            ],
            [
                'name' => 'Midnight Skeleton Headphones',
                'brand' => 'DYNARA',
                'specs' => 'Headphone bergaya gothic dengan ornamen skeleton',
                'price' => 399000,
                'image' => 'headphone-gothic.jpg',
                'category' => 'Audio',
            ],
            [
                'name' => 'Petal Pink Keyboard',
                'brand' => 'DYNARA',
                'specs' => 'Keyboard pink dengan desain cute untuk setup meja',
                'price' => 459000,
                'image' => 'keyboard-pink.jpg',
                'category' => 'Accessories',
            ],
            [
                'name' => 'Ruby Mechanical Keyboard',
                'brand' => 'DYNARA',
                'specs' => 'Keyboard burgundy dengan tampilan elegan',
                'price' => 489000,
                'image' => 'keyboard-burgundy.jpg',
                'category' => 'Accessories',
            ],
            [
                'name' => 'Rose Digital Camera',
                'brand' => 'DYNARA',
                'specs' => 'Kamera digital compact warna pink',
                'price' => 799000,
                'image' => 'camera-pink.jpg',
                'category' => 'Camera',
            ],
            [
                'name' => 'Petal Buds',
                'brand' => 'DYNARA',
                'specs' => 'Earbuds wireless pink dengan charging case',
                'price' => 199000,
                'image' => 'earbuds-pink.jpg',
                'category' => 'Audio',
            ],
            [
                'name' => 'Blush Charge Power Bank',
                'brand' => 'DYNARA',
                'specs' => 'Power bank pink dengan desain ramping dan portabel',
                'price' => 169000,
                'image' => 'powerbank-pink.jpg',
                'category' => 'Accessories',
            ],
        ]);
    }
}