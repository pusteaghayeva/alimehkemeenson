<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FromArtisanInternationaldocumentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('internationaldocuments')->delete();
        
        \DB::table('internationaldocuments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'AVROPA SOSİAL XARTİYASI',
            'pdf' => '[{"download_link":"internationaldocuments\\\\May2022\\\\VE4AUUiwK0N7zOf6DTG6.pdf","original_name":"OKcL0Qlo7HSGUt2w5Ohr.pdf"},{"download_link":"internationaldocuments\\\\May2022\\\\2N7b3vuS0Twk4JvgJI6R.pdf","original_name":"ebWdgKCXs5iW88hN5VDC (1).pdf"}]',
                'created_at' => '2022-05-05 12:42:00',
                'updated_at' => '2022-05-05 12:49:55',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'AVROPA ŞURASININ İNSAN ALVERİNƏ DAİR KONVENSİYASI VƏ İZAHAT MƏRUZƏSİ',
                'pdf' => '[{"download_link":"internationaldocuments\\\\May2022\\\\LijXTL3s7svcwvMDRBVx.pdf","original_name":"nMhJmxOEd4Nhbsn3cE6O.pdf"}]',
                'created_at' => '2022-05-05 12:42:00',
                'updated_at' => '2022-05-05 12:50:57',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'VARŞAVA BƏYANNAMƏSİ',
                'pdf' => '[{"download_link":"internationaldocuments\\\\May2022\\\\GMd9l3P2bMaUrheQDJ8J.pdf","original_name":"lV8r2FC5ometXSzjZAKz.pdf"}]',
                'created_at' => '2022-05-05 12:46:00',
                'updated_at' => '2022-05-05 12:51:27',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'MƏHKƏMƏ QƏRARLARININ İCRASI HAQQINDA TÖVSİYYƏ',
                'pdf' => '[{"download_link":"internationaldocuments\\\\May2022\\\\x2ZtulPUfKN6mwdfq1Un.pdf","original_name":"Gq4DWauyeXa5WQev4gBn.pdf"}]',
                'created_at' => '2022-05-05 12:46:00',
                'updated_at' => '2022-05-05 12:52:04',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'İNSAN HÜQUQLARININ VƏ ƏSAS AZADLIQLARIN MÜDAFİƏSİ HAQQINDA KONVENSİYA',
                'pdf' => '[{"download_link":"internationaldocuments\\\\May2022\\\\Vq5ZFEMF3S6qYDuWjARq.pdf","original_name":"5WLJqU4hn60dfvMPny55.pdf"}]',
                'created_at' => '2022-05-05 12:47:00',
                'updated_at' => '2022-05-05 12:52:53',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'AVROPA ŞURASININ NİZAMNAMƏSİ',
                'pdf' => '[{"download_link":"internationaldocuments\\\\May2022\\\\mytDDEu0qZ5r4WYEWTI6.pdf","original_name":"OKcL0Qlo7HSGUt2w5Ohr.pdf"}]',
                'created_at' => '2022-05-05 12:48:00',
                'updated_at' => '2022-05-10 18:18:52',
            ),
        ));
        
        
    }
}