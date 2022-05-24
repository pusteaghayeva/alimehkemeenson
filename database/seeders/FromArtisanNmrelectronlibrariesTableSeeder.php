<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FromArtisanNmrelectronlibrariesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('nmrelectronlibraries')->delete();
        
        \DB::table('nmrelectronlibraries')->insert(array (
            0 => 
            array (
                'id' => 1,
                'image' => 'nmrelectronlibraries\\May2022\\jsBXeRU0PiftasslfTE8.jpg',
                'pdf' => '[{"download_link":"nmrelectronlibraries\\\\May2022\\\\EhXuX3mL7ba7y1ljmpRP.pdf","original_name":"bx5H5FkXSF7Txl0k0RMd.pdf"}]',
                'created_at' => '2022-05-06 12:17:45',
                'updated_at' => '2022-05-06 12:17:45',
            ),
            1 => 
            array (
                'id' => 2,
                'image' => 'nmrelectronlibraries\\May2022\\61qyzYzXhJC6xVkMcj8S.jpeg',
            'pdf' => '[{"download_link":"nmrelectronlibraries\\\\May2022\\\\aME0bExIJfv0OZYsILrl.pdf","original_name":"bx5H5FkXSF7Txl0k0RMd (2).pdf"}]',
                'created_at' => '2022-05-16 07:43:00',
                'updated_at' => '2022-05-16 07:46:04',
            ),
        ));
        
        
    }
}