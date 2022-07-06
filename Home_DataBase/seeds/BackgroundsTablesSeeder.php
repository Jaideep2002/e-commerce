<?php

use App\Backgrounds;
use Illuminate\Database\Seeder;

class BackgroundsTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $background = [[
            'image_path' => '\dist\images\header\banner_side.png',
            'flag' => False,
            'height'=> 0,
            'width'=> 0,

        ],
        [
            'image_path' => '\dist\images\header\right_cycle1.png',
            'flag' => False,
            'height'=> 0,
            'width'=> 0,
        ],
             ['image_path' => '\dist\images\header\right_cycle2.png',
            'flag' => False,
            'height'=> 0,
            'width'=> 0,
    ],[
                'image_path' => '\dist\images\header\logo.png',
            'flag' => False,
            'height'=> 120,
            'width'=> 320,
            ],
            [
                'image_path' => '\dist\images\header\mobail.png',
            'flag' => False,
            'height'=> 0,
            'width'=> 0,
            ],
            [
                'image_path' => '\dist\images\header\logo.png',
            'flag' => False,
            'height'=> 120,
            'width'=> 260,
            ],
            [
                'image_path' => '\dist\images\header\right_cycle1.png',
            'flag' => False,
            'height'=> 0,
            'width'=> 0,
            ],
            [
                'image_path' => '\dist\images\header\right_cycle2.png',
            'flag' => False,
            'height'=> 0,
            'width'=> 0,
            ],
            [
                'image_path' => '\dist\images\content\banner_mob1.png',
            'flag' => False,
            'height'=> 500,
            'width'=> 700,
            ],
            [
                'image_path' => '\dist\images\header\right_cycle1.png',
            'flag' => False,
            'height'=> 0,
            'width'=> 0,
            ],
            [
                'image_path' => '\dist\images\header\right_cycle1.png',
            'flag' => False,
            'height'=> 0,
            'width'=> 0,
            ],
            [
                'image_path' => '\dist\images\header\right_cycle2.png',
            'flag' => False,
            'height'=> 0,
            'width'=> 0,
            ],
            [
                'image_path' => '\dist\images\content\ss1.png',
            'flag' => False,
            'height'=> 0,
            'width'=> 0,
            ],
            [
                'image_path' => '\dist\images\content\footer_logo.png',
            'flag' => False,
            'height'=> 230,
            'width'=> 250,
            ],];
            Backgrounds::insert($background);
    }
}
