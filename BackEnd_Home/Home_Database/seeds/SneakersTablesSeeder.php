<?php

// use App\Sneakers;
use App\Sneakers;
use Illuminate\Database\Seeder;

class SneakersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shoes = [[ 

            'image_path' => '\dist\images\content\sp.png',
            'flag' => True,
            'discount' => '12%',
            'name' => 'StockX Air Jordan 1 Colette',
            'discount_price' => '₹19999.99',
            'price' => '₹24000.99',
            'height'=> 190,
            'width'=> 180,
            

        ],
    [
        'image_path' => '\dist\images\content\sp1.jpg',
            'flag' => True,
            'discount' => '18%',
            'name' => 'Balenciaga Street Wear',
            'discount_price' => '₹9999.99',
            'price' => '₹11999.99',
            'height'=> 190,
            'width'=> 0,


        
    ],
    [
        'image_path' => '\dist\images\content\sp2.png',
        'flag' => True,
        'discount' => '12%',
        'name' => 'Eminem X Carhart Air Jordan 4',
        'discount_price' => '₹37000.99',
        'price' => '₹40000.20',
        'height'=> 150,
        'width'=> 0,
    ],
    [
            'image_path' => '\dist\images\content\sp3.png',
            'flag' => True,
            'discount' => '20%',
            'name' => 'Nike Dunk High Pro SB Flom',
            'discount_price' => '₹10,00,000',
            'price' => '₹15,00,000',
            'height'=> 170,
            'width'=> 0,
    ]
];
    Sneakers::insert($shoes);
    }
}
