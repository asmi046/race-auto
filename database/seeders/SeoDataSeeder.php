<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class SeoDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'url' => "/",
                'seo_title' => "Автомобильные запчасти в Москве по выгодным ценам",
                'seo_description' => "Автомобильные запчасти в Москве по выгодным ценам с доставкой по всей России. Огромный выбор запчастей для иномарок и отечественных авто. Гарантия качества и лучшие цены.",
                'page_title' => "",
                // 'seoable_id' => 1,
                // 'seoable_type' => "App\Models\Page"
            ],

        ];

        DB::table("seo_data")->insert($data);
    }
}
