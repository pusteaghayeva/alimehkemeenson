<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FromArtisanForpersonsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('forpersons')->delete();
        
        \DB::table('forpersons')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Apellyasiya şikayətinin verilməsi qaydası',
                'link' => '\\appeal',
                'created_at' => '2022-05-05 08:05:00',
                'updated_at' => '2022-05-23 11:08:39',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Kassasiya şikayətinin verilməsi qaydası',
                'link' => 'http://supremecourt.gov.az/static/view/32',
                'created_at' => '2022-05-05 08:05:00',
                'updated_at' => '2022-05-05 08:07:05',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Elektron kabinetə keçid',
                'link' => 'https://e-mehkeme.gov.az/Private',
                'created_at' => '2022-05-05 08:07:00',
                'updated_at' => '2022-05-10 19:02:50',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Məhkəmə rüsumlarının ödənilməsi',
                'link' => 'https://courts.gov.az/az/main/page/Mhkm-rusumlarinin-odnilmsi_3076',
                'created_at' => '2022-05-05 08:08:00',
                'updated_at' => '2022-05-10 19:00:54',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Baxılan işlər',
                'link' => 'https://e-mehkeme.gov.az/Public/Cases?courtid=113',
                'created_at' => '2022-05-05 08:09:00',
                'updated_at' => '2022-05-10 19:03:24',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Məhkəmə aktları',
                'link' => 'https://e-mehkeme.gov.az/Public/Anonymizedecisions?courtid=113',
                'created_at' => '2022-05-05 08:09:00',
                'updated_at' => '2022-05-10 19:01:30',
            ),
        ));
        
        
    }
}