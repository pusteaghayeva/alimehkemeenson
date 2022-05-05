<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FromArtisanContactsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contacts')->delete();
        
        \DB::table('contacts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Əlaqə',
                'slug' => 'contact',
                'image' => 'contacts\\May2022\\Dm56Kw9rSB3IVTLnM4jc.png',
                'created_at' => '2022-05-05 08:47:00',
                'updated_at' => '2022-05-05 12:12:02',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Qəbul qrafiki',
                'slug' => 'reception_days',
                'image' => 'contacts\\May2022\\cBBa9VcCRaikLJsVxaxK.png',
                'created_at' => '2022-05-05 08:50:00',
                'updated_at' => '2022-05-05 12:09:29',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Onlayn müraciət',
                'slug' => 'online',
                'image' => 'contacts\\May2022\\cVqoVMQGBwJJqw0GxFpe.png',
                'created_at' => '2022-05-05 08:50:00',
                'updated_at' => '2022-05-05 12:12:36',
            ),
        ));
        
        
    }
}