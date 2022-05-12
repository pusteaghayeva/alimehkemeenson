<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FromArtisanNewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('news')->delete();
        
        \DB::table('news')->insert(array (
            0 => 
            array (
                'id' => 1,
                'image' => 'news\\May2022\\h9ClPM72kZBuwz0TWPqi.jpg',
                'title' => 'MUZEY GÜNLƏRİ ÇƏRÇİVƏSİNDƏ NAXÇIVAN MUXTAR RESPUBLİKASI ALİ MƏHKƏMƏSİ VƏ İXTİSASLAŞDIRILMIŞ MƏHKƏMƏLƏRİN KOLLEKTİVİ MİLLİ DƏYƏRLƏR MUZEYİNDƏ OLUBLAR.',
                'slug' => 'muzey-gunl-ri-c-rci-v-si-nd-naxcivan-muxtar-respubli-kasi-ali-m-hk-m-si-v-i-xti-saslasdirilmis-m-hk-m-l-ri-n-kollekti-vi-mi-lli-d-y-rl-r-muzeyi-nd-olublar',
                'content' => '<p>sdadd</p>',
                'read_more' => 'Ardını oxu',
                'created_at' => '2022-05-11 05:37:00',
                'updated_at' => '2022-05-11 06:04:28',
            ),
            1 => 
            array (
                'id' => 2,
                'image' => 'news\\May2022\\nsPvB2wVm10oJjaD5xil.jpg',
                'title' => 'ndjkd',
                'slug' => 'ndjkd',
                'content' => '<p>xaxx</p>',
                'read_more' => 'as',
                'created_at' => '2022-05-11 12:53:41',
                'updated_at' => '2022-05-11 12:53:41',
            ),
        ));
        
        
    }
}