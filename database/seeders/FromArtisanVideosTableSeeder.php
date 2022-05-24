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
                'id' => 3,
                'link' => '-l-821FRpwk',
                'created_at' => '2022-05-16 07:37:00',
                'updated_at' => '2022-05-23 08:24:10',
            ),
        ));
        
        
    }
}