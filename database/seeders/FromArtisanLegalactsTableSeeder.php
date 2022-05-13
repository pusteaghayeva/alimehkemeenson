<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FromArtisanLegalactsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('legalacts')->delete();
        
        \DB::table('legalacts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'image' => 'legalacts\\May2022\\TDc2mucANWwFlWaB7ct8.png',
                'title' => 'Naxçıvan Muxtar Respublikasının hüquqi aktları',
                'slug' => 'naxcivan-muxtar-respublikasinin-huquqi-aktlari',
                'link' => 'http://huquqiaktlar.nakhchivan.az/Akts.aspx',
                'created_at' => '2022-05-06 07:22:00',
                'updated_at' => '2022-05-06 12:41:08',
            ),
            1 => 
            array (
                'id' => 2,
                'image' => 'legalacts\\May2022\\rDdiv8xQWPfxRWeBeh2n.png',
                'title' => 'Ali Məhkəmənin Plenum Qərarları',
                'slug' => 'ali-m-hk-m-nin-plenum-q-rarlari',
                'link' => 'http://supremecourt.gov.az/category/view/16',
                'created_at' => '2022-05-06 07:31:00',
                'updated_at' => '2022-05-06 12:39:47',
            ),
            2 => 
            array (
                'id' => 3,
                'image' => 'legalacts\\May2022\\5qLHIyu63tgKHvc5avEd.png',
                'title' => 'Konstitusiya Məhkəməsinin Qərarları',
                'slug' => 'konstitusiya-m-hk-m-sinin-q-rarlari',
                'link' => 'http://www.constcourt.gov.az/az/decisions',
                'created_at' => '2022-05-06 12:40:00',
                'updated_at' => '2022-05-10 12:40:47',
            ),
            3 => 
            array (
                'id' => 4,
                'image' => 'legalacts\\May2022\\vOqw42xwnlZY3dP1FWS4.png',
                'title' => 'Milli Məclisin Qərarları',
                'slug' => 'milli-m-clisin-q-rarlari',
                'link' => 'https://www.meclis.gov.az/cat-qanun.php?cat=72&lang=az',
                'created_at' => '2022-05-06 12:41:00',
                'updated_at' => '2022-05-10 12:39:57',
            ),
            4 => 
            array (
                'id' => 5,
                'image' => 'legalacts\\May2022\\fpRXPML3eHhkYrYo0Pe2.png',
                'title' => 'Fərman və Sərəncamlar',
                'slug' => 'f-rman-v-s-r-ncamlar',
                'link' => 'https://president.az/az/documents/category/decrees',
                'created_at' => '2022-05-06 12:42:00',
                'updated_at' => '2022-05-10 12:39:08',
            ),
            5 => 
            array (
                'id' => 6,
                'image' => 'legalacts\\May2022\\ylkXkdqWopel8YCg0e5C.png',
                'title' => 'Konstitusiya, Məcəllələr və Qanunlar',
                'slug' => 'konstitusiya-m-c-ll-l-r-v-qanunlar',
                'link' => '\\constitution',
                'created_at' => '2022-05-06 12:42:00',
                'updated_at' => '2022-05-06 12:51:45',
            ),
        ));
        
        
    }
}