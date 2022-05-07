<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FromArtisanServicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('services')->delete();
        
        \DB::table('services')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Dövlət rüsumunun hesablanması kalkulyatoru',
                'link' => 'https://e-mehkeme.gov.az/Calculator',
                'icon' => 'fa-calculator',
                'created_at' => '2022-05-05 19:54:44',
                'updated_at' => '2022-05-05 19:54:44',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Sənədlərin nümunələri',
                'link' => '\\exampledocuments',
                'icon' => 'fa-file',
                'created_at' => '2022-05-05 19:56:00',
                'updated_at' => '2022-05-06 10:25:58',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Nəşrlərin nümunələri',
                'link' => '\\publications',
                'icon' => 'fa-print',
                'created_at' => '2022-05-05 19:57:20',
                'updated_at' => '2022-05-05 19:57:20',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Elektron kitabxana',
                'link' => '\\electronlibrary',
                'icon' => 'fa-lines-leaning',
                'created_at' => '2022-05-05 19:58:00',
                'updated_at' => '2022-05-06 13:35:18',
            ),
        ));
        
        
    }
}