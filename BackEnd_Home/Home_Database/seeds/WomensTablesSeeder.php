<?php

use App\Womens;
use Illuminate\Database\Seeder;

class WomensTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $women = [[ 
            'image_path' => '\dist\images\content\wp.jpg',
            'flag' => True,
            'discount' => '12%',
            'name' => 'Green Lehenga choli(लहंगा चोली)',
            'discount_price' => '₹9999.99',
            'price' => '₹4999.99',
            'height'=> 220,
            'width'=> 0,

        ],
    [
        'image_path' => '\dist\images\content\wp1.jpg',
            'flag' => True,
            'discount' => '18%',
            'name' => 'Khadi Handloom Pure Cotton Half and Half saree Blue Turquise Yellow',
            'discount_price' => '₹1999.99',
            'price' => '₹2999.99',
            'height'=> 220,
            'width'=> 0,
    ],
    [
        'image_path' => '\dist\images\content\wp2.jpg',
            'flag' => True,
            'discount' => '12%',
            'name' => 'Summer Midi Dress',
            'discount_price' => '₹3700.99',
            'price' => '₹4000.20',
            'height'=> 200,
            'width'=> 0,
    ],
    [
        'image_path' => '\dist\images\content\wp3.jpg',
            'flag' => True,
            'discount' => '20%',
            'name' => 'Women T-Shirt',
            'discount_price' => '₹999.99',
            'price' => '₹1200.99',
            'height'=> 210,
            'width'=> 0,
    ]
];
    Womens::insert($women);
    }
}
