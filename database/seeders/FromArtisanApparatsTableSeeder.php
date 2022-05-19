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
                'slug' => 'commercial-board',
                'link' => 'https://courts.gov.az/az/nakhchivansupreme/judge/Xidirov-hliman-Mehman-oglu_445',
                'position' => 'Kollegiyanın sədri:',
                'member' => 'Xıdırov Əhliman Mehman oğlu',
                'college' => '1',
                'status' => 1,
                'created_at' => '2022-05-17 19:13:00',
                'updated_at' => '2022-05-18 07:22:57',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Cinayət collegiyası',
                'slug' => 'criminal-board',
                'link' => 'https://courts.gov.az/az/nakhchivansupreme/judge/Mirzyev-Ilqar-Mhrrm-oglu_429',
                'position' => 'Kollegiyanın sədri:',
                'member' => 'Mirzəyev İlqar Məhərrəm oğlu',
                'college' => '1',
                'status' => 1,
                'created_at' => '2022-05-17 19:17:00',
                'updated_at' => '2022-05-18 07:25:11',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'İnzibati kollegiya',
                'slug' => 'administrativnyj-sovet',
                'link' => 'https://courts.gov.az/az/nakhchivansupreme/judge/Qurbanov-Yusifli-Suleyman-oglu_432',
                'position' => 'Kollegiyanın sədri vəzifəsini  icra edən',
                'member' => 'Qurbanov Yusifəli Süleyman oğlu',
                'college' => '1',
                'status' => 1,
                'created_at' => '2022-05-17 19:20:00',
                'updated_at' => '2022-05-18 07:24:11',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Mülki kollegiya',
                'slug' => 'mulki-kollegiya',
                'link' => 'mulki-kollegiya',
                'position' => 'Kollegiyanın sədri vəzifəsini  icra edən',
                'member' => 'Allahverdiyev Əli Kərim oğlu',
                'college' => '1',
                'status' => 1,
                'created_at' => '2022-05-17 19:21:00',
                'updated_at' => '2022-05-20 06:27:29',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Ali Məhkəmənin sədr müavini',
                'slug' => 'deputy-chairman-of-the-supreme-court',
                'link' => 'https://courts.gov.az/az/nakhchivansupreme/judge/Novruzov-sgr-Novruz-oglu_437',
                'position' => 'Ali Məhkəmənin sədr müavini',
                'member' => 'Ali Məhkəmənin sədr müavini',
                'college' => '0',
                'status' => 1,
                'created_at' => '2022-05-17 19:22:00',
                'updated_at' => '2022-05-18 07:27:28',
            ),
            5 => 
            array (
                'id' => 7,
                'title' => 'Ali Məhkəmənin sədri',
                'slug' => 'chairman-of-the-supreme-court',
                'link' => 'https://courts.gov.az/az/nakhchivansupreme/judge/liyev-Qasim-Vli-oglu_453',
                'position' => 'Ali Məhkəmənin sədri',
                'member' => 'Ali Məhkəmənin sədri',
                'college' => '0',
                'status' => 1,
                'created_at' => '2022-05-17 19:29:00',
                'updated_at' => '2022-05-18 07:26:18',
            ),
        ));
        
        
    }
}