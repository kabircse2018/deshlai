<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tags')->insert([
            [
                'tag_name' => 'Tag 01',
                'tag_slug' => 'Tag-01',
            ],
            [
                'tag_name' => 'Tag 02',
                'tag_slug' => 'Tag-02',
            ],
            [
                'tag_name' => 'Tag 03',
                'tag_slug' => 'Tag-03',
            ],
            [
                'tag_name' => 'Tag 04',
                'tag_slug' => 'Tag-04',
            ],
         
        ]);
    }
}
