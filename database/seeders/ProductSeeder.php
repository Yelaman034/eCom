<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        DB::table('products')->insert(
            [
                [
                    'name' => "Macbook Pro 16 Core i9 1TB SSD",
                    'price' => "9,790,000₮",
                    'category' => "Macbook",
                    'description' => "9-р үеийн 8 цөм бүхий Intel Core i9 процессор,
                    16inch Retina дэлгэц болон True Tone технологи,
                    TouchBar болон Touch ID",
                    'photo' => "productImage/mac2.jpeg"
                ]
            ]
        );     
    }
}
