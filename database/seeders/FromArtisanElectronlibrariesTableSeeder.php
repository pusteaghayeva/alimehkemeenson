<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FromArtisanElectronlibrariesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('electronlibraries')->delete();
        
        \DB::table('electronlibraries')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Naxçıvan MR Ali Məhkəməsinin elektron bazası',
                'link' => '\\nmrelectronlibraries',
                'image' => 'electronlibraries\\May2022\\aMx9dmMHro6R7GmOuTPv.png',
                'created_at' => '2022-05-06 11:25:00',
                'updated_at' => '2022-05-07 07:38:29',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Prezident Kitabxanası',
                'link' => 'https://www.ebooks.az/category_law.html',
                'image' => 'electronlibraries\\May2022\\TOY0NoVyy86v42qXZQP3.png',
                'created_at' => '2022-05-06 11:27:00',
                'updated_at' => '2022-05-10 18:03:02',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Naxçıvan Muxtar Respublika Kitabxanası',
                'link' => 'http://e-kitab.nakhchivan.az/Az/AltKatKitablar.aspx?AltKatID=35&KatID=5',
                'image' => 'electronlibraries\\May2022\\ZQVdbS2Qopoo8UCKniJo.png',
                'created_at' => '2022-05-06 11:28:00',
                'updated_at' => '2022-05-10 18:04:34',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Azərbaycan Milli Kitabxanası',
                'link' => 'http://ek.anl.az/search/query?facet_lang=aze&facet_subject_general=H%C3%BCquq%C5%9F%C3%BCnasl%C4%B1q&sort=relevance&theme=e-kataloq',
                'image' => 'electronlibraries\\May2022\\A8ZwMvidac6nafHmP9yi.png',
                'created_at' => '2022-05-06 11:29:00',
                'updated_at' => '2022-05-10 18:08:37',
            ),
        ));
        
        
    }
}