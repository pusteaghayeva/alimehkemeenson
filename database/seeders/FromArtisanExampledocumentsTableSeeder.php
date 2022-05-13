<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FromArtisanExampledocumentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('exampledocuments')->delete();
        
        \DB::table('exampledocuments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Etirazlar',
                'link' => 'https://courts.gov.az/az/main/page/Etirazlar_2778',
                'created_at' => '2022-05-06 10:17:00',
                'updated_at' => '2022-05-10 17:57:27',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Vəsaitlər',
                'link' => 'https://courts.gov.az/az/main/page/Vsattlr_2777',
                'created_at' => '2022-05-06 10:30:00',
                'updated_at' => '2022-05-10 17:55:45',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Şikayətlər',
                'link' => 'https://courts.gov.az/az/main/page/Sikaytlr_2776',
                'created_at' => '2022-05-06 10:31:00',
                'updated_at' => '2022-05-10 17:54:51',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Ərizələr',
                'link' => 'https://courts.gov.az/az/main/page/rizlr_2775',
                'created_at' => '2022-05-06 10:31:00',
                'updated_at' => '2022-05-10 17:54:04',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'İddia ərizələri',
                'link' => 'https://courts.gov.az/az/main/page/Iddia-rizlri_2774',
                'created_at' => '2022-05-06 10:31:00',
                'updated_at' => '2022-05-10 17:56:27',
            ),
        ));
        
        
    }
}