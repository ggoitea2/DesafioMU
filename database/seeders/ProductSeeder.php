<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([[
            'name' => 'MacBook Pro 13.3" Retina [MYD82] M1 Chip 256 GB - Space Gray',
            'description'=> '',
            'image'=>'apple.com/v/macbook-pro/ac/images/overview/hero_13__d1tfa5zby7e6_large_2x.jpg',
            'brand'=>'Apple',
            'price'=>'2000',
            'price_sale'=>'1950',
            'category'=>'Macbook Pro',
            'stock'=>'5',
        ],
        [
            'name' => 'MacBook 5',
            'description'=> '',
            'image'=>'',
            'brand'=>'Apple',
            'price'=>'5000',
            'price_sale'=>'150',
            'category'=>'Macbook',
            'stock'=>'5',
        ],
        [
            'name' => 'Lenovo Thinkpad',
            'description'=> 'sl420',
            'image'=>'https://www.lenovo.com/medias/lenovo-laptop-thinkpad-x1-nano-13-series-thumbnail.png?context=bWFzdGVyfHJvb3R8NzE0Mjd8aW1hZ2UvcG5nfGg4Yy9oYmEvMTEwODE5ODA4Mzc5MTgucG5nfDA1YzgyNmRlZWM3YWIyZmY0OGE1MTkxNzdkOWU5ODIwYzU0MzJlYTExYzgwNDk0ZTA1MmE4OTY1MGE5OGU0NzY',
            'brand'=>'Lenovo',
            'price'=>'150',
            'price_sale'=>'100',
            'category'=>'thinkPad',
            'stock'=>'1',
        ],]
    );
    }
}