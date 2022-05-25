<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FromArtisanApparatsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('apparats')->delete();
        
        \DB::table('apparats')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Kommersiya kollegiyası',
                'slug' => 'kommersiya-kollegiyasi',
                'link' => 'kommersiya-kollegiyasi',
                'college' => '1',
                'status' => 1,
                'created_at' => '2022-05-21 09:00:17',
                'updated_at' => '2022-05-21 09:00:17',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Cinayət kollegiyası',
                'slug' => 'cinay-t-kollegiyasi',
                'link' => 'cinayet-kollegiyasi',
                'college' => '1',
                'status' => 1,
                'created_at' => '2022-05-21 10:15:03',
                'updated_at' => '2022-05-21 10:15:03',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'İnzibati kollegiya',
                'slug' => 'i-nzibati-kollegiya',
                'link' => 'inzibati-kollegiya',
                'college' => '1',
                'status' => 1,
                'created_at' => '2022-05-21 10:15:36',
                'updated_at' => '2022-05-21 10:15:36',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Mülki kollegiya',
                'slug' => 'mulki-kollegiya',
                'link' => 'mulki-kollegiya',
                'college' => '1',
                'status' => 1,
                'created_at' => '2022-05-21 10:15:55',
                'updated_at' => '2022-05-21 10:15:55',
            ),
            4 => 
            array (
                'id' => 6,
                'title' => 'Ali Məhkəmənin sədr müavini',
                'slug' => 'zamestitel-predsedatelya-suda',
                'link' => 'https://courts.gov.az/az/nakhchivansupreme/judge/Asgar-Novruzov_437',
                'college' => '0',
                'status' => 1,
                'created_at' => '2022-05-21 10:17:00',
                'updated_at' => '2022-05-23 11:02:45',
            ),
            5 => 
            array (
                'id' => 7,
                'title' => 'Ali Məhkəmənin sədri',
                'slug' => 'ali-m-hk-m-nin-s-dri',
                'link' => 'https://courts.gov.az/az/nakhchivansupreme/judge/Gasim-Aliyev_453',
                'college' => '0',
                'status' => 1,
                'created_at' => '2022-05-22 18:06:00',
                'updated_at' => '2022-05-23 10:58:41',
            ),
        ));
        
        
    }
}