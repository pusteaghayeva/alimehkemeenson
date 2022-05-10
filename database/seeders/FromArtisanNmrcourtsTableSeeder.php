<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FromArtisanNmrcourtsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('nmrcourts')->delete();
        
        \DB::table('nmrcourts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Naxçıvan MR Ağır Cinayətlər Məhkəməsi',
                'link' => 'https://courts.gov.az/az/nakhchivangravecrimes',
                'status' => 1,
                'created_at' => '2022-05-05 07:56:34',
                'updated_at' => '2022-05-05 07:56:34',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Şərur Rayon Məhkəməsi',
                'link' => 'https://courts.gov.az/az/sharur',
                'status' => 1,
                'created_at' => '2022-05-05 07:57:01',
                'updated_at' => '2022-05-05 07:57:01',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Naxçıvan MR Hərbi Məhkəməsi',
                'link' => 'https://courts.gov.az/az/nakhchivanmilitary',
                'status' => 1,
                'created_at' => '2022-05-05 07:57:35',
                'updated_at' => '2022-05-05 07:57:35',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Ordubad Rayon Məhkəməsi',
                'link' => 'https://courts.gov.az/az/ordubad',
                'status' => 1,
                'created_at' => '2022-05-05 07:58:11',
                'updated_at' => '2022-05-05 07:58:11',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Naxçıvan MR İnzibati Məhkəməsi',
                'link' => 'https://courts.gov.az/az/nmradministrative',
                'status' => 1,
                'created_at' => '2022-05-05 07:58:38',
                'updated_at' => '2022-05-05 07:58:38',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Şahbuz Rayon Məhkəməsi',
                'link' => 'https://courts.gov.az/az/shakhbuz',
                'status' => 1,
                'created_at' => '2022-05-05 07:59:16',
                'updated_at' => '2022-05-05 07:59:16',
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'Naxçıvan MR Kommersiya Məhkəməsi',
                'link' => 'https://courts.gov.az/az/nmrcommercial',
                'status' => 1,
                'created_at' => '2022-05-05 08:00:26',
                'updated_at' => '2022-05-05 08:00:26',
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'Culfa Rayon Məhkəməsi',
                'link' => 'https://courts.gov.az/az/julfa',
                'status' => 1,
                'created_at' => '2022-05-05 08:00:53',
                'updated_at' => '2022-05-05 08:00:53',
            ),
            8 => 
            array (
                'id' => 9,
                'title' => 'Naxçıvan Şəhər Məhkəməsi',
                'link' => 'https://courts.gov.az/az/nakhchivan',
                'status' => 1,
                'created_at' => '2022-05-05 08:01:18',
                'updated_at' => '2022-05-05 08:01:18',
            ),
            9 => 
            array (
                'id' => 10,
                'title' => 'Kəngərli Rayon Məhkəməsi',
                'link' => 'https://courts.gov.az/az/kangarli',
                'status' => 1,
                'created_at' => '2022-05-05 08:01:43',
                'updated_at' => '2022-05-05 08:01:43',
            ),
            10 => 
            array (
                'id' => 11,
                'title' => 'Babək Rayon Məhkəməsi',
                'link' => 'https://courts.gov.az/az/babek',
                'status' => 1,
                'created_at' => '2022-05-05 08:02:01',
                'updated_at' => '2022-05-05 08:02:01',
            ),
            11 => 
            array (
                'id' => 12,
                'title' => 'Sədərək Rayon Məhkəməsi',
                'link' => 'https://courts.gov.az/az/sadarak',
                'status' => 1,
                'created_at' => '2022-05-05 08:02:18',
                'updated_at' => '2022-05-05 08:02:18',
            ),
        ));
        
        
    }
}