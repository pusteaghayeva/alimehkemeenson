<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FromArtisanApparatusesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('apparatuses')->delete();
        
        \DB::table('apparatuses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Məhkəmə aparatı',
                'slug' => 'm-hk-m-aparati',
                'link' => '/',
                'college' => '0',
                'status' => 1,
                'created_at' => '2022-05-12 05:55:00',
                'updated_at' => '2022-05-12 10:30:02',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Kommersiya kollegiyası',
                'slug' => 'kommersiya-kollegiyasi',
                'link' => 'https://courts.gov.az/az/nakhchivansupreme/judge/Xidirov-hliman-Mehman-oglu_445',
                'college' => '1',
                'status' => 1,
                'created_at' => '2022-05-12 05:56:00',
                'updated_at' => '2022-05-12 10:32:49',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Cinayət kollegiyası',
                'slug' => 'cinay-t-kollegiyasi',
                'link' => 'https://courts.gov.az/az/nakhchivansupreme/judge/Mirzyev-Ilqar-Mhrrm-oglu_429',
                'college' => '1',
                'status' => 1,
                'created_at' => '2022-05-12 05:58:00',
                'updated_at' => '2022-05-12 10:40:53',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'İnzibati kollegiya',
                'slug' => 'i-nzibati-kollegiya',
                'link' => 'https://courts.gov.az/az/nakhchivansupreme/judge/Qurbanov-Yusifli-Suleyman-oglu_432',
                'college' => '1',
                'status' => 1,
                'created_at' => '2022-05-12 06:00:00',
                'updated_at' => '2022-05-12 10:33:25',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Mülki kollegiya',
                'slug' => 'mulki-kollegiya',
                'link' => 'https://courts.gov.az/az/nakhchivansupreme/judge/Allahverdiyev-li-Krim-oglu_428',
                'college' => '1',
                'status' => 1,
                'created_at' => '2022-05-12 06:00:00',
                'updated_at' => '2022-05-12 10:32:17',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Ali Məhkəmənin sədr müavini',
                'slug' => 'ali-m-hk-m-nin-s-dr-muavini',
                'link' => 'https://courts.gov.az/az/nakhchivansupreme/judge/Novruzov-sgr-Novruz-oglu_437',
                'college' => '0',
                'status' => 1,
                'created_at' => '2022-05-12 06:00:00',
                'updated_at' => '2022-05-12 10:26:06',
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'Ali Məhkəmənin sədri',
                'slug' => 'ali-m-hk-m-nin-s-dri',
                'link' => 'https://courts.gov.az/az/nakhchivansupreme/judge/liyev-Qasim-Vli-oglu_453',
                'college' => '0',
                'status' => 1,
                'created_at' => '2022-05-12 06:01:00',
                'updated_at' => '2022-05-12 10:26:57',
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'Naxçıvan Muxtar Respublikası Ali Məhkəməsinin strukturu',
                'slug' => 'naxcivan-muxtar-respublikasi-ali-m-hk-m-sinin-strukturu',
                'link' => 'http://127.0.0.1:8000/structure',
                'college' => '0',
                'status' => 1,
                'created_at' => '2022-05-12 06:01:00',
                'updated_at' => '2022-05-12 10:27:40',
            ),
        ));
        
        
    }
}