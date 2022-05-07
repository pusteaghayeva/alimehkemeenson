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
                'created_at' => '2022-05-06 10:17:29',
                'updated_at' => '2022-05-06 10:17:29',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Vəsaitlər',
                'link' => 'https://courts.gov.az/az/main/page/Vsattlr_2777',
                'created_at' => '2022-05-06 10:30:43',
                'updated_at' => '2022-05-06 10:30:43',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Şikayətlər',
                'link' => 'https://courts.gov.az/az/main/page/Sikaytlr_2776',
                'created_at' => '2022-05-06 10:31:05',
                'updated_at' => '2022-05-06 10:31:05',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Ərizələr',
                'link' => 'https://courts.gov.az/az/main/page/rizlr_2775',
                'created_at' => '2022-05-06 10:31:28',
                'updated_at' => '2022-05-06 10:31:28',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'İddia ərizələri',
                'link' => 'https://courts.gov.az/az/main/page/Iddia-rizlri_2774',
                'created_at' => '2022-05-06 10:31:50',
                'updated_at' => '2022-05-06 10:31:50',
            ),
        ));
        
        
    }
}