<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FromArtisanUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 6,
                'role_id' => 1,
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$/q6dpHFbXM77fhLruVOolu1G2l2tbGQtau32BnzuDu5DasNUFXNZC',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2022-04-27 19:23:25',
                'updated_at' => '2022-04-27 19:23:25',
            ),
        ));
        
        
    }
}