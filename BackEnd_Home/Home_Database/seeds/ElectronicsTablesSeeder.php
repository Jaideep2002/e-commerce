<?php

use App\Electronics;
use Illuminate\Database\Seeder;

class ElectronicsTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $electronic = [[ 
            'image_path' => '\dist\images\content\hp1.jpg',
            'flag' => True,
            'discount' => '32%',
            'name' => 'Bose Bluetooth Headphones',
            'discount_price' => '₹2999.99',
            'price' => '₹3999.99',
            'height'=> 190,
            'width'=> 0,

        ],
    [
        'image_path' => '\dist\images\content\cc1.jpg',
            'flag' => True,
            'discount' => '25%',
            'name' => 'Canon EOS 1500D',
            'discount_price' => '₹49999.99',
            'price' => '₹59999.90',
            'height'=> 210,
            'width'=> 0,
    ],
    [
        'image_path' => '\dist\images\content\gp1.jpg',
            'flag' => True,
            'discount' => '22%',
            'name' => 'GOPRO HERO 9',
            'discount_price' => '₹29999.99',
            'price' => '₹34600.50',
            'height'=> 190,
            'width'=> 0,
    ],
    [
        'image_path' => '\dist\images\content\pp.png',
            'flag' => True,
            'discount' => '32%',
            'name' => 'Pioneer CDJ-3000',
            'discount_price' => '₹2,70,000.92',
            'price' => '₹3,00,000.92',
            'height'=> 190,
            'width'=> 0,
    ]
];

    Electronics::insert($electronic);
    }
}
    