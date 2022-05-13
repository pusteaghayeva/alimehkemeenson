<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FromArtisanTranslatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('translates')->delete();
        
        \DB::table('translates')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'news',
                'text' => 'Xəbərlər',
                'status' => 1,
                'created_at' => '2022-05-12 12:09:00',
                'updated_at' => '2022-05-12 12:17:20',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'video_materials',
                'text' => 'Video materiallar',
                'status' => 1,
                'created_at' => '2022-05-12 12:21:13',
                'updated_at' => '2022-05-12 12:21:13',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'usefull_links',
                'text' => 'Faydalı Linklər',
                'status' => 1,
                'created_at' => '2022-05-12 12:22:11',
                'updated_at' => '2022-05-12 12:22:11',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'nmrcourts',
                'text' => 'Naxçıvan Muxtar Respublikası Məhkəmələri',
                'status' => 1,
                'created_at' => '2022-05-12 12:24:13',
                'updated_at' => '2022-05-12 12:24:13',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'supreme_court-90',
                'text' => 'Ali Məhkəmə - 90',
                'status' => 1,
                'created_at' => '2022-05-12 12:25:46',
                'updated_at' => '2022-05-12 12:25:46',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'forpersons',
                'text' => 'Vətəndaşlar üçün',
                'status' => 1,
                'created_at' => '2022-05-12 12:27:23',
                'updated_at' => '2022-05-12 12:27:23',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'news',
                'text' => 'Xeberler',
                'status' => 1,
                'created_at' => '2022-05-13 08:12:57',
                'updated_at' => '2022-05-13 08:12:57',
            ),
        ));
        
        
    }
}