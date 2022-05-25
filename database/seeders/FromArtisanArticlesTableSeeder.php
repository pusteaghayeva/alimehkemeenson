<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FromArtisanArticlesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('articles')->delete();
        
        \DB::table('articles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Məqalə 1',
                'slug' => 'm-qal-1',
                'image' => 'articles\\May2022\\iLsVT4UsXloVRiiVDnOy.jpg',
                'content' => '<p>Məqalə az</p>',
                'created_at' => '2022-05-05 19:18:00',
                'updated_at' => '2022-05-10 16:54:05',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Məqalə',
                'slug' => 'm-qal',
                'image' => 'articles\\May2022\\aJYuFXpnxK5GIjmYEasO.png',
                'content' => '<p>Məqalə content</p>',
                'created_at' => '2022-05-16 07:38:18',
                'updated_at' => '2022-05-16 07:38:18',
            ),
        ));
        
        
    }
}