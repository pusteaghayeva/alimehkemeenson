<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FromArtisanMigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'migration' => '2014_10_12_000000_create_users_table',
                'batch' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'migration' => '2014_10_12_100000_create_password_resets_table',
                'batch' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'migration' => '2016_01_01_000000_add_voyager_user_fields',
                'batch' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'migration' => '2016_01_01_000000_create_data_types_table',
                'batch' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'migration' => '2016_05_19_173453_create_menu_table',
                'batch' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'migration' => '2016_10_21_190000_create_roles_table',
                'batch' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'migration' => '2016_10_21_190000_create_settings_table',
                'batch' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'migration' => '2016_11_30_135954_create_permission_table',
                'batch' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'migration' => '2016_11_30_141208_create_permission_role_table',
                'batch' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'migration' => '2016_12_26_201236_data_types__add__server_side',
                'batch' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'migration' => '2017_01_13_000000_add_route_to_menu_items_table',
                'batch' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'migration' => '2017_01_14_005015_create_translations_table',
                'batch' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'migration' => '2017_01_15_000000_make_table_name_nullable_in_permissions_table',
                'batch' => 1,
            ),
            13 => 
            array (
                'id' => 14,
                'migration' => '2017_03_06_000000_add_controller_to_data_types_table',
                'batch' => 1,
            ),
            14 => 
            array (
                'id' => 15,
                'migration' => '2017_04_21_000000_add_order_to_data_rows_table',
                'batch' => 1,
            ),
            15 => 
            array (
                'id' => 16,
                'migration' => '2017_07_05_210000_add_policyname_to_data_types_table',
                'batch' => 1,
            ),
            16 => 
            array (
                'id' => 17,
                'migration' => '2017_08_05_000000_add_group_to_settings_table',
                'batch' => 1,
            ),
            17 => 
            array (
                'id' => 18,
                'migration' => '2017_11_26_013050_add_user_role_relationship',
                'batch' => 1,
            ),
            18 => 
            array (
                'id' => 19,
                'migration' => '2017_11_26_015000_create_user_roles_table',
                'batch' => 1,
            ),
            19 => 
            array (
                'id' => 20,
                'migration' => '2018_03_11_000000_add_user_settings',
                'batch' => 1,
            ),
            20 => 
            array (
                'id' => 21,
                'migration' => '2018_03_14_000000_add_details_to_data_types_table',
                'batch' => 1,
            ),
            21 => 
            array (
                'id' => 22,
                'migration' => '2018_03_16_000000_make_settings_value_nullable',
                'batch' => 1,
            ),
            22 => 
            array (
                'id' => 23,
                'migration' => '2019_08_19_000000_create_failed_jobs_table',
                'batch' => 1,
            ),
            23 => 
            array (
                'id' => 24,
                'migration' => '2019_12_14_000001_create_personal_access_tokens_table',
                'batch' => 1,
            ),
            24 => 
            array (
                'id' => 25,
                'migration' => '2022_04_28_111627_create_languages_table',
                'batch' => 1,
            ),
            25 => 
            array (
                'id' => 26,
                'migration' => '2022_04_28_130436_create_home_pages_table',
                'batch' => 1,
            ),
            26 => 
            array (
                'id' => 27,
                'migration' => '2022_04_28_134554_create_contacts_table',
                'batch' => 1,
            ),
            27 => 
            array (
                'id' => 28,
                'migration' => '2022_04_29_055933_create_forpersons_table',
                'batch' => 1,
            ),
            28 => 
            array (
                'id' => 29,
                'migration' => '2022_04_29_061618_create_services_table',
                'batch' => 1,
            ),
            29 => 
            array (
                'id' => 30,
                'migration' => '2022_04_29_070805_create_nmrcourts_table',
                'batch' => 1,
            ),
            30 => 
            array (
                'id' => 31,
                'migration' => '2022_04_29_083026_create_langs_table',
                'batch' => 1,
            ),
            31 => 
            array (
                'id' => 32,
                'migration' => '2022_04_29_084147_create_usefullinks_table',
                'batch' => 1,
            ),
            32 => 
            array (
                'id' => 33,
                'migration' => '2022_04_29_100158_create_footersocials_table',
                'batch' => 1,
            ),
            33 => 
            array (
                'id' => 34,
                'migration' => '2022_04_29_124856_create_pages_table',
                'batch' => 1,
            ),
            34 => 
            array (
                'id' => 35,
                'migration' => '2022_04_29_132105_create_colleges_table',
                'batch' => 1,
            ),
            35 => 
            array (
                'id' => 36,
                'migration' => '2022_04_30_083758_create_structures_table',
                'batch' => 1,
            ),
            36 => 
            array (
                'id' => 37,
                'migration' => '2022_04_30_121843_create_apparatuses_table',
                'batch' => 1,
            ),
            37 => 
            array (
                'id' => 38,
                'migration' => '2022_05_04_053302_create_legalacts_table',
                'batch' => 1,
            ),
            38 => 
            array (
                'id' => 39,
                'migration' => '2022_05_04_060253_create_decisionpresidia_table',
                'batch' => 1,
            ),
            39 => 
            array (
                'id' => 40,
                'migration' => '2022_05_04_070137_create_galleries_table',
                'batch' => 1,
            ),
            40 => 
            array (
                'id' => 41,
                'migration' => '2022_05_04_092521_create_faqs_table',
                'batch' => 1,
            ),
            41 => 
            array (
                'id' => 42,
                'migration' => '2022_05_04_100433_create_educationmaterials_table',
                'batch' => 1,
            ),
            42 => 
            array (
                'id' => 43,
                'migration' => '2022_05_04_104041_create_supremecourts_table',
                'batch' => 1,
            ),
            43 => 
            array (
                'id' => 44,
                'migration' => '2022_05_04_110850_create_internationaldocuments_table',
                'batch' => 1,
            ),
            44 => 
            array (
                'id' => 45,
                'migration' => '2022_05_04_121804_create_measures_table',
                'batch' => 1,
            ),
            45 => 
            array (
                'id' => 46,
                'migration' => '2022_05_04_124118_create_news_table',
                'batch' => 1,
            ),
            46 => 
            array (
                'id' => 47,
                'migration' => '2022_05_04_183731_create_speeches_table',
                'batch' => 1,
            ),
            47 => 
            array (
                'id' => 48,
                'migration' => '2022_05_04_191936_create_articles_table',
                'batch' => 1,
            ),
            48 => 
            array (
                'id' => 49,
                'migration' => '2022_05_05_084325_create_contacts_table',
                'batch' => 2,
            ),
            49 => 
            array (
                'id' => 50,
                'migration' => '2022_05_05_131825_create_decisionpresidia_table',
                'batch' => 3,
            ),
            50 => 
            array (
                'id' => 51,
                'migration' => '2022_05_05_174712_create_reports_table',
                'batch' => 4,
            ),
            51 => 
            array (
                'id' => 52,
                'migration' => '2022_05_05_191057_create_videos_table',
                'batch' => 5,
            ),
            52 => 
            array (
                'id' => 53,
                'migration' => '2022_05_06_062805_create_legalacts_table',
                'batch' => 6,
            ),
            53 => 
            array (
                'id' => 54,
                'migration' => '2022_05_06_075911_create_educationmaterials_table',
                'batch' => 7,
            ),
            54 => 
            array (
                'id' => 55,
                'migration' => '2022_05_06_082645_create_appeals_table',
                'batch' => 8,
            ),
            55 => 
            array (
                'id' => 56,
                'migration' => '2022_05_06_101402_create_exampledocuments_table',
                'batch' => 9,
            ),
            56 => 
            array (
                'id' => 57,
                'migration' => '2022_05_06_103527_create_publications_table',
                'batch' => 10,
            ),
            57 => 
            array (
                'id' => 58,
                'migration' => '2022_05_06_111527_create_electronlibraries_table',
                'batch' => 11,
            ),
            58 => 
            array (
                'id' => 59,
                'migration' => '2022_05_06_112246_create_electronlibraries_table',
                'batch' => 12,
            ),
            59 => 
            array (
                'id' => 60,
                'migration' => '2022_05_06_121113_create_nmrelectronlibraries_table',
                'batch' => 13,
            ),
            60 => 
            array (
                'id' => 61,
                'migration' => '2022_05_06_124604_create_constitutions_table',
                'batch' => 14,
            ),
            61 => 
            array (
                'id' => 62,
                'migration' => '2022_05_11_052958_create_news_table',
                'batch' => 15,
            ),
            62 => 
            array (
                'id' => 63,
                'migration' => '2022_05_11_062902_create_applyonlines_table',
                'batch' => 16,
            ),
            63 => 
            array (
                'id' => 64,
                'migration' => '2022_05_12_053210_create_judicialapparats_table',
                'batch' => 17,
            ),
            64 => 
            array (
                'id' => 65,
                'migration' => '2022_05_12_054631_create_apparats_table',
                'batch' => 18,
            ),
            65 => 
            array (
                'id' => 66,
                'migration' => '2022_05_12_054903_create_apparatuses_table',
                'batch' => 18,
            ),
            66 => 
            array (
                'id' => 67,
                'migration' => '2022_05_12_061311_create_titles_table',
                'batch' => 19,
            ),
            67 => 
            array (
                'id' => 68,
                'migration' => '2022_05_12_120434_create_translates_table',
                'batch' => 20,
            ),
            68 => 
            array (
                'id' => 69,
                'migration' => '2022_05_12_125922_create_adres_table',
                'batch' => 21,
            ),
            69 => 
            array (
                'id' => 70,
                'migration' => '2022_05_14_084053_create_footers_table',
                'batch' => 22,
            ),
            70 => 
            array (
                'id' => 71,
                'migration' => '2022_05_16_061654_create_slidertodays_table',
                'batch' => 23,
            ),
            71 => 
            array (
                'id' => 72,
                'migration' => '2022_05_17_160201_create_single_apparatuses_table',
                'batch' => 24,
            ),
            72 => 
            array (
                'id' => 73,
                'migration' => '2022_05_17_183720_create_apparats_table',
                'batch' => 25,
            ),
            73 => 
            array (
                'id' => 74,
                'migration' => '2022_05_17_185546_create_apparats_table',
                'batch' => 26,
            ),
            74 => 
            array (
                'id' => 75,
                'migration' => '2022_05_17_190558_create_apparats_table',
                'batch' => 27,
            ),
            75 => 
            array (
                'id' => 76,
                'migration' => '2022_05_21_083729_create_apparats_table',
                'batch' => 28,
            ),
        ));
        
        
    }
}