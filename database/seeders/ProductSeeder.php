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
                    'name' => "iPhone 12 Pro (128GB)",
                    'price' => "5,310,000₮",
                    'category' => "iPhone",
                    'description' => "iPhone 12 Pro нь 8-аас 10 битийн HDR бичлэгээс үсрэх бөгөөд 700 сая өнгө хадгалж, илүү бодитой видеог авах боломжтой.",
                    'photo' => "productImage/ip12pro.jpg",
                    'b_code' => "10020005",
                    'brend' => "Apple",
                    'color' => "цэнхэр"
                ],
                [
                    'name' => "iPhone 12 Pro (128GB)",
                    'price' => "5,310,000₮",
                    'category' => "iPhone",
                    'description' => "iPhone 12 Pro нь 8-аас 10 битийн HDR бичлэгээс үсрэх бөгөөд 700 сая өнгө хадгалж, илүү бодитой видеог авах боломжтой.",
                    'photo' => "productImage/ip12pro.jpg",
                    'b_code' => "10020005",
                    'brend' => "Apple",
                    'color' => "цэнхэр"
                ],
                [
                    'name' => "iPhone 12 Pro (128GB)",
                    'price' => "5,310,000₮",
                    'category' => "iPhone",
                    'description' => "iPhone 12 Pro нь 8-аас 10 битийн HDR бичлэгээс үсрэх бөгөөд 700 сая өнгө хадгалж, илүү бодитой видеог авах боломжтой.",
                    'photo' => "productImage/ip12pro.jpg",
                    'b_code' => "10020005",
                    'brend' => "Apple",
                    'color' => "цэнхэр"
                ],[
                    'name' => "iPhone 12 Pro (128GB)",
                    'price' => "5,310,000₮",
                    'category' => "iPhone",
                    'description' => "iPhone 12 Pro нь 8-аас 10 битийн HDR бичлэгээс үсрэх бөгөөд 700 сая өнгө хадгалж, илүү бодитой видеог авах боломжтой.",
                    'photo' => "productImage/ip12pro.jpg",
                    'b_code' => "10020005",
                    'brend' => "Apple",
                    'color' => "цэнхэр"
                ]
                
            ]
        );    
    }
}
