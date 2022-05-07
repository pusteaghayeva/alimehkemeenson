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
        $this->call(FromArtisanCollegesTableSeeder::class);
        $this->call(FromArtisanForpersonsTableSeeder::class);
        $this->call(FromArtisanLangsTableSeeder::class);
        $this->call(FromArtisanNewsTableSeeder::class);
        $this->call(FromArtisanNmrcourtsTableSeeder::class);
        $this->call(FromArtisanServicesTableSeeder::class);
        $this->call(FromArtisanUsefullinksTableSeeder::class);
        $this->call(FromArtisanPagesTableSeeder::class);
        Schema::enableForeignKeyConstraints();

        $this->call(FromArtisanPersonalAccessTokensTableSeeder::class);
        $this->call(FromArtisanPasswordResetsTableSeeder::class);
        $this->call(FromArtisanFailedJobsTableSeeder::class);
        $this->call(FromArtisanFootersocialsTableSeeder::class);
        $this->call(FromArtisanStructuresTableSeeder::class);
        $this->call(FromArtisanFaqsTableSeeder::class);
        $this->call(FromArtisanInternationaldocumentsTableSeeder::class);
        $this->call(FromArtisanSpeechesTableSeeder::class);
        $this->call(FromArtisanDecisionpresidiaTableSeeder::class);
        $this->call(FromArtisanGalleriesTableSeeder::class);
        $this->call(FromArtisanEducationmaterialsTableSeeder::class);
        $this->call(FromArtisanApparatusesTableSeeder::class);
        $this->call(FromArtisanAppealsTableSeeder::class);
        $this->call(FromArtisanArticlesTableSeeder::class);
        $this->call(FromArtisanConstitutionsTableSeeder::class);
        $this->call(FromArtisanElectronlibrariesTableSeeder::class);
        $this->call(FromArtisanExampledocumentsTableSeeder::class);
        $this->call(FromArtisanLegalactsTableSeeder::class);
        $this->call(FromArtisanMeasuresTableSeeder::class);
        $this->call(FromArtisanMigrationsTableSeeder::class);
        $this->call(FromArtisanNmrelectronlibrariesTableSeeder::class);
        $this->call(FromArtisanPublicationsTableSeeder::class);
        $this->call(FromArtisanReportsTableSeeder::class);
        $this->call(FromArtisanSupremecourtsTableSeeder::class);
        $this->call(FromArtisanVideosTableSeeder::class);
    }
}
