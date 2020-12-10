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
                    'price' => "5310000",
                    'category' => "iPhone",
                    'description' => "iPhone 12 Pro нь 8-аас 10 битийн HDR бичлэгээс үсрэх бөгөөд 700 сая өнгө хадгалж, илүү бодитой видеог авах боломжтой.",
                    'photo' => "productImage/ip12pro.jpg",
                    'b_code' => "10020001",
                    'brend' => "Apple",
                    'color' => "цэнхэр"
                ],
                [
                    'name' => "Macbook Pro 16 Core i9 1TB SSD",
                    'price' => "9790000",
                    'category' => "Macbook",
                    'description' => "9-р үеийн 8 цөм бүхий Intel Core i9 процессор,
                    16inch Retina дэлгэц болон True Tone технологи,
                    TouchBar болон Touch ID",
                    'photo' => "productImage/mac2.jpeg",
                    'b_code' => "10020002",
                    'brend' => "Apple",
                    'color' => "цэнхэр"
                ],
                [
                    'name' => "Macbook Pro 13 2020 512GB",
                    'price' => "5990000",
                    'category' => "Macbook",
                    'description' => "1.4GHz хүчин чадал бүхий 8-р үеийн Quad-Core Core i5 процессор Turbo Boost асаасан горим дээр 3.9Ghz хүртэл ажиллах чадамжтай",
                    'photo' => "productImage/mac.jpeg",
                    'b_code' => "10020003",
                    'brend' => "Apple",
                    'color' => "хар"
                ],[
                    'name' => "AirPods Pro",
                    'price' => "810000",
                    'category' => "headphone",
                    'description' => "AirPods Pro дуу тусгаарлах технологи нь орчны чимээг зөвхөн тусгаарлаад зогсохгүй буцаагаад дуу чимээг нээх хүртэл боломжтой",
                    'photo' => "productImage/aerpro.jpeg",
                    'b_code' => "10020004",
                    'brend' => "Apple",
                    'color' => "цагаан"
                ]
                
            ]
        );    
    }
}
