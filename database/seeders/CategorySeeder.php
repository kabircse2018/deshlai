<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            
            [
                'category_name' => 'কবিতা',
                'category_slug' => 'কবিতা',
                'status' => '1'
            ],
            
            [
                'category_name' => 'কথাসাহিত্য',
                'category_slug' => 'কথাসাহিত্য',
                'status' => '1'
            ],
           
            [
                'category_name' => 'গদ্যধারা',
                'category_slug' => 'গদ্যধারা',
                'status' => '1'
            ],
            [
                'category_name' => 'উড়ন্তডুবুরী',
                'category_slug' => 'উড়ন্তডুবুরী',
                'status' => '1'
            ],
            [
                'category_name' => 'এক্সিবিশন',
                'category_slug' => 'এক্সিবিশন',
                'status' => '1'
            ],
            [
                'category_name' => 'শিল্প',
                'category_slug' => 'শিল্প',
                'status' => '1'
            ],
            [
                'category_name' => 'ধারাবাহিক',
                'category_slug' => 'ধারাবাহিক',
                'status' => '1'
            ],
            [
                'category_name' => 'বিশেষ সংখ্যা',
                'category_slug' => 'বিশেষ-সংখ্যা',
                'status' => '1'
            ],
            [
                'category_name' => 'TEST',
                'category_slug' => 'test',
                'status' => '0'
            ],



        ]);
    }
}
