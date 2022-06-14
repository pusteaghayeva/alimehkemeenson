<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FromArtisanPasswordResetsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('password_resets')->delete();
        
        
        
    }
}