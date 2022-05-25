<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FromArtisanAdresTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('adres')->delete();
        
        \DB::table('adres')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Ünvan',
                'slug' => 'address',
                'link' => 'https://www.google.com/maps/place/Supreme+Court+of+the+Nakhchivan+Autonomous+Republic/@39.2127918,45.4128389,15z/data=!4m5!3m4!1s0x0:0xd58a463aec931022!8m2!3d39.2127105!4d45.4128434',
                'image' => 'adres\\May2022\\vjnkbFynHoxT0txBhYcA.png',
                'adres' => 'Naxçıvan şəhəri, AZ 7000, Atatürk küçəsi 19',
                'created_at' => '2022-05-12 13:07:00',
                'updated_at' => '2022-05-12 13:15:14',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Telefon',
                'slug' => 'telefon',
                'link' => 'tel:+6494461709',
                'image' => 'adres\\May2022\\3i5AKbgrTsLn0tCDWBnh.png',
            'adres' => ' (036) 544-61-77',
                'created_at' => '2022-05-12 13:18:21',
                'updated_at' => '2022-05-12 13:18:21',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Fax',
                'slug' => 'faks',
            'link' => 'tel:+(036) 550-12-77',
                'image' => 'adres\\May2022\\ssBYrut9faHOWLoTZOhZ.png',
            'adres' => '(036) 550-12-77',
                'created_at' => '2022-05-12 13:19:56',
                'updated_at' => '2022-05-12 13:19:56',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'E-mail',
                'slug' => 'elektronnaya-pochta',
                'link' => 'mailto: alimehkeme@nakhchivan.az',
                'image' => 'adres\\May2022\\F3KGGpqu002mQSJNzlgs.png',
                'adres' => 'alimehkeme@nakhchivan.az',
                'created_at' => '2022-05-12 13:21:32',
                'updated_at' => '2022-05-12 13:21:32',
            ),
        ));
        
        
    }
}