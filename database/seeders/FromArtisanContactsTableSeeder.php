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
                'image' => 'contacts\\April2022\\koCdx6LCoPqIzGEytLr0.png',
                'created_at' => '2022-04-28 18:35:49',
                'updated_at' => '2022-04-28 18:35:49',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Qəbul qrafiki',
                'image' => 'contacts\\April2022\\EReX6XA4QHAERXXQc40W.png',
                'created_at' => '2022-04-29 05:31:52',
                'updated_at' => '2022-04-29 05:31:52',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Onlayn müraciət',
                'image' => 'contacts\\April2022\\XcS00XBt7QxCjwMgTQ7l.png',
                'created_at' => '2022-04-29 05:33:01',
                'updated_at' => '2022-04-29 05:33:01',
            ),
        ));
        
        
    }
}