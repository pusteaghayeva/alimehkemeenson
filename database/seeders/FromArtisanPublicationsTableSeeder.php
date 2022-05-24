<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FromArtisanPublicationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('publications')->delete();
        
        \DB::table('publications')->insert(array (
            0 => 
            array (
                'id' => 1,
                'image' => 'publications\\May2022\\swFHZoCmvp3o1q4MnbrX.jpg',
                'pdf' => '[{"download_link":"publications\\\\May2022\\\\bx5H5FkXSF7Txl0k0RMd.pdf","original_name":"OKcL0Qlo7HSGUt2w5Ohr.pdf"}]',
                'created_at' => '2022-05-06 11:07:00',
                'updated_at' => '2022-05-06 11:11:13',
            ),
            1 => 
            array (
                'id' => 2,
                'image' => 'publications\\May2022\\TupwwOBfSIKuyDEHGsOM.jpg',
            'pdf' => '[{"download_link":"publications\\\\May2022\\\\1yKwZcZe1zmrPCn4ickM.pdf","original_name":"bx5H5FkXSF7Txl0k0RMd (2).pdf"}]',
                'created_at' => '2022-05-16 07:42:24',
                'updated_at' => '2022-05-16 07:42:24',
            ),
        ));
        
        
    }
}