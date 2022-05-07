<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FromArtisanUsefullinksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('usefullinks')->delete();
        
        \DB::table('usefullinks')->insert(array (
            0 => 
            array (
                'id' => 1,
                'image' => 'usefullinks\\May2022\\TPzw4AwfRlZc0TVfHgqQ.png',
                'link' => 'https://courts.gov.az/az/',
                'status' => 1,
                'created_at' => '2022-05-05 07:46:37',
                'updated_at' => '2022-05-05 07:46:37',
            ),
            1 => 
            array (
                'id' => 2,
                'image' => 'usefullinks\\May2022\\ea05AnKc28uRdWiAqJPu.png',
                'link' => 'https://www.justice.gov.az/',
                'status' => 1,
                'created_at' => '2022-05-05 07:47:04',
                'updated_at' => '2022-05-05 07:47:04',
            ),
            2 => 
            array (
                'id' => 3,
                'image' => 'usefullinks\\May2022\\qnSWAviQq9Co7gvz1QtR.png',
                'link' => 'http://huquqiaktlar.nakhchivan.az/Akts.aspx',
                'status' => 1,
                'created_at' => '2022-05-05 07:51:00',
                'updated_at' => '2022-05-05 07:52:11',
            ),
            3 => 
            array (
                'id' => 4,
                'image' => 'usefullinks\\May2022\\sz5XdlAOqwmLF8qSdZqv.png',
                'link' => 'http://www.alimeclis.az/',
                'status' => 1,
                'created_at' => '2022-05-05 07:52:37',
                'updated_at' => '2022-05-05 07:52:37',
            ),
        ));
        
        
    }
}