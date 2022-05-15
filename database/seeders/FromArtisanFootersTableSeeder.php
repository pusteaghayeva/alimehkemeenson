<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FromArtisanFootersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('footers')->delete();
        
        \DB::table('footers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Tərtibat Və Proqramlaşdırma Naxçıvan Muxtar Respublikası Rabitə Və Yeni Texnologiyalar Nazirliyi',
                'link' => 'http://rabite.nmr.az/',
                'created_at' => '2022-05-14 08:52:45',
                'updated_at' => '2022-05-14 08:52:45',
            ),
        ));
        
        
    }
}