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
        //
        Product::create([
            'product_name'     => 'sarasa',
            'product_price'    => '22000',
            'product_desc'     => 'sarasa pen 0.5',
            'product_type'     => 'stationary',
            'product_img'      => url('/')
        ]);

        Product::create([
            'product_name'     => 'love is war',
            'product_price'    => '20000',
            'product_desc'     => 'manga chapter 10',
            'product_type'     => 'book',
            'product_img'      => url('/')
        ]);

        Product::create([
            'product_name'     => 'Heroes of Olympus',
            'product_price'    => '20000',
            'product_desc'     => 'House of Hades',
            'product_type'     => 'book',
            'product_img'      => url('/')
        ]);

        Product::create([
            'product_name'     => 'energel',
            'product_price'    => '20000',
            'product_desc'     => 'energel pen',
            'product_type'     => 'stationary',
            'product_img'      => url('/')
        ]);

        Product::create([
            'product_name'     => 'miiko',
            'product_price'    => '45000',
            'product_desc'     => 'manga chapter 32',
            'product_type'     => 'book',
            'product_img'      => url('/')
        ]);

        
    }
}
