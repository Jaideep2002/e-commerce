<?php

use App\Mens;
use Illuminate\Database\Seeder;

class MensTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $men = [[ 
            'image_path' => '\dist\images\content\hs1.png',
            'flag' => True,
            'discount' => '20%',
            'name' => 'Black Leather Jacket',
            'discount_price' => '₹3999.99',
            'price' => '₹5999.99',
            'height'=> 210,
            'width'=> 0,

        ],
    [
        'image_path' => '\dist\images\content\hs2.png',
            'flag' => True,
            'discount' => '20%',
            'name' => 'Street Style Hoodie',
            'discount_price' => '₹2999.99',
            'price' => '₹3500.50',
            'height'=> 210,
            'width'=> 0,
    ],
    [
        'image_path' => '\dist\images\content\hs4.png',
            'flag' => True,
            'discount' => '20%',
            'name' => 'Cargo Pants',
            'discount_price' => '₹3999.99',
            'price' => '₹5200.39',
            'height'=> 190,
            'width'=> 0,
    ],
    [
        'image_path' => '\dist\images\content\hs3.png',
            'flag' => True,
            'discount' => '20%',
            'name' => 'Dyed T-Shirts',
            'discount_price' => '₹1999.99',
            'price' => '₹2499.99',
            'height'=> 190,
            'width'=> 0,
    ]
];
    Mens::insert($men);
    }
}
