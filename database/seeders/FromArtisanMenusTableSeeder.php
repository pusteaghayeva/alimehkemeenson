<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FromArtisanMenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'created_at' => '2022-04-27 18:17:11',
                'updated_at' => '2022-04-27 18:17:11',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'mainMenu',
                'created_at' => '2022-04-27 19:38:05',
                'updated_at' => '2022-04-27 19:38:05',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'dropDownMenu',
                'created_at' => '2022-04-28 05:33:03',
                'updated_at' => '2022-04-28 05:33:03',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'hamburgerNavbar',
                'created_at' => '2022-04-28 08:02:30',
                'updated_at' => '2022-04-28 08:02:30',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'socialMedia',
                'created_at' => '2022-04-28 08:23:56',
                'updated_at' => '2022-04-28 08:23:56',
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'footerCopyright',
                'created_at' => '2022-04-29 10:19:46',
                'updated_at' => '2022-04-29 10:19:46',
            ),
        ));
        
        
    }
}