<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FromArtisanPersonalAccessTokensTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('personal_access_tokens')->delete();
        
        
        
    }
}