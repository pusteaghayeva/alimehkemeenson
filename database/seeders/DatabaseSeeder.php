<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Schema::disableForeignKeyConstraints();
        // Bütün Seederlər burada olmalıdır.
        Schema::disableForeignKeyConstraints();
        $this->call(FromArtisanDataTypesTableSeeder::class);
        $this->call(FromArtisanDataRowsTableSeeder::class);
        $this->call(FromArtisanMenusTableSeeder::class);
        $this->call(FromArtisanMenuItemsTableSeeder::class);
        $this->call(FromArtisanRolesTableSeeder::class);
        $this->call(FromArtisanPermissionsTableSeeder::class);
        $this->call(FromArtisanPermissionRoleTableSeeder::class);
        $this->call(FromArtisanSettingsTableSeeder::class);
        $this->call(FromArtisanUsersTableSeeder::class);
        $this->call(FromArtisanUserRolesTableSeeder::class);
        $this->call(FromArtisanTranslationsTableSeeder::class);
        $this->call(FromArtisanContactsTableSeeder::class);
        $this->call(FromArtisanHomePagesTableSeeder::class);
        $this->call(FromArtisanAboutsTableSeeder::class);
        $this->call(FromArtisanCollegesTableSeeder::class);
    }
}
