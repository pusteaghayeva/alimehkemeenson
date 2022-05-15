<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FromArtisanGalleriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('galleries')->delete();
        
        \DB::table('galleries')->insert(array (
            0 => 
            array (
                'id' => 1,
                'image' => 'galleries\\May2022\\fZcvZCfSsFfc0nBorjVd.gif',
                'created_at' => '2022-05-05 19:08:00',
                'updated_at' => '2022-05-05 19:08:00',
            ),
            1 => 
            array (
                'id' => 2,
                'image' => 'galleries\\May2022\\HN8kb4d27IvMtFBY4aTe.gif',
                'created_at' => '2022-05-16 07:33:00',
                'updated_at' => '2022-05-16 07:36:40',
            ),
        ));
        
        
    }
}