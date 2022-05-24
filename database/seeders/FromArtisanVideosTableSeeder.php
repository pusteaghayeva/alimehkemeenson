<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FromArtisanVideosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('videos')->delete();
        
        \DB::table('videos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'link' => '_ycFGjgb4XQ',
                'created_at' => '2022-05-05 19:13:00',
                'updated_at' => '2022-05-23 08:27:24',
            ),
            1 => 
            array (
                'id' => 3,
                'link' => 'J7vik7Ah1FM',
                'created_at' => '2022-05-16 07:37:00',
                'updated_at' => '2022-05-23 08:26:10',
            ),
            2 => 
            array (
                'id' => 5,
                'link' => 'z7t0czI_DzY',
                'created_at' => '2022-05-23 08:37:45',
                'updated_at' => '2022-05-23 08:37:45',
            ),
            3 => 
            array (
                'id' => 6,
                'link' => '_ycFGjgb4XQ',
                'created_at' => '2022-05-23 08:46:58',
                'updated_at' => '2022-05-23 08:46:58',
            ),
        ));
        
        
    }
}