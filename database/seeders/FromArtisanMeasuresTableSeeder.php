<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FromArtisanMeasuresTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('measures')->delete();
        
        \DB::table('measures')->insert(array (
            0 => 
            array (
                'id' => 1,
                'image' => 'measures\\May2022\\hJjWRFlduOvZsspSnW17.jpg',
                'title' => 'Tədbirlər 1',
                'slug' => 't-dbirl-r-1',
                'content' => '<p>Tədbirlər1 content az</p>',
                'created_at' => '2022-05-05 19:26:00',
                'updated_at' => '2022-05-16 07:39:37',
            ),
        ));
        
        
    }
}