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
                    'name' => "iPhone 11 Pro Max 256gb (2 SIM)",
                    'price' => "4,609,000₮",
                    'category' => "iPhone",
                    'description' => "Тус бүр 5.8 болон 6.5 инч бүхий OLED дэлгэц. Super Retina XDR дэлгэцтэй ба HDR10 нягтаршил дэмжинэ. Дуу гаргалт Dolby Vision, Dolby Atmos системтэй",
                    'photo' => "productImage/ip11.jpeg"
                ]
            ]
        );     
    }
}
