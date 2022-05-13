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
                'link' => 'http://www.alimeclis.az/',
                'created_at' => '2022-05-05 19:13:15',
                'updated_at' => '2022-05-05 19:13:15',
            ),
            1 => 
            array (
                'id' => 2,
                'link' => 'sncjkzcb',
                'created_at' => '2022-05-05 19:14:52',
                'updated_at' => '2022-05-05 19:14:52',
            ),
        ));
        
        
    }
}