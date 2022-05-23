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
                'email' => 'alimehkemesuperadmin@admin.com',
                'avatar' => 'users\\May2022\\aFKv3VWpX1Zo1FQosaRx.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$eDWvHKKjQ5dHJuhn8PNSuuT9B44ndPwX.Glo8GRulHtlBo2PTya8K',
                'remember_token' => NULL,
                'settings' => '{"locale":"az"}',
                'created_at' => '2022-04-27 19:23:25',
                'updated_at' => '2022-05-22 19:01:08',
            ),
            1 => 
            array (
                'id' => 7,
                'role_id' => 2,
                'name' => 'Test',
                'email' => 'manager@manager.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$h5Z.4WY.ZEViLxapH7fy0efpXnmEoVva6yoTJa8khuRa8DOOnSXpC',
                'remember_token' => NULL,
                'settings' => '{"locale":"az"}',
                'created_at' => '2022-05-23 07:35:27',
                'updated_at' => '2022-05-23 07:35:27',
            ),
        ));
        
        
    }
}