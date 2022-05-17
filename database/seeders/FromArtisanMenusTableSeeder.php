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
            6 => 
            array (
                'id' => 8,
                'name' => 'logo',
                'created_at' => '2022-05-14 12:51:47',
                'updated_at' => '2022-05-14 12:59:44',
            ),
            7 => 
            array (
                'id' => 9,
                'name' => 'search',
                'created_at' => '2022-05-14 13:01:45',
                'updated_at' => '2022-05-14 13:01:45',
            ),
            8 => 
            array (
                'id' => 11,
                'name' => 'hamburgerNavbar_foreign',
                'created_at' => '2022-05-18 17:19:30',
                'updated_at' => '2022-05-18 17:19:30',
            ),
        ));
        
        
    }
}