<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FromArtisanPermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2022-04-27 18:17:11',
                'updated_at' => '2022-04-27 18:17:11',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2022-04-27 18:17:11',
                'updated_at' => '2022-04-27 18:17:11',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2022-04-27 18:17:11',
                'updated_at' => '2022-04-27 18:17:11',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2022-04-27 18:17:11',
                'updated_at' => '2022-04-27 18:17:11',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2022-04-27 18:17:11',
                'updated_at' => '2022-04-27 18:17:11',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2022-04-27 18:17:11',
                'updated_at' => '2022-04-27 18:17:11',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2022-04-27 18:17:11',
                'updated_at' => '2022-04-27 18:17:11',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2022-04-27 18:17:11',
                'updated_at' => '2022-04-27 18:17:11',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2022-04-27 18:17:11',
                'updated_at' => '2022-04-27 18:17:11',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2022-04-27 18:17:11',
                'updated_at' => '2022-04-27 18:17:11',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2022-04-27 18:17:11',
                'updated_at' => '2022-04-27 18:17:11',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2022-04-27 18:17:11',
                'updated_at' => '2022-04-27 18:17:11',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2022-04-27 18:17:11',
                'updated_at' => '2022-04-27 18:17:11',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2022-04-27 18:17:11',
                'updated_at' => '2022-04-27 18:17:11',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2022-04-27 18:17:11',
                'updated_at' => '2022-04-27 18:17:11',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2022-04-27 18:17:11',
                'updated_at' => '2022-04-27 18:17:11',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2022-04-27 18:17:11',
                'updated_at' => '2022-04-27 18:17:11',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2022-04-27 18:17:11',
                'updated_at' => '2022-04-27 18:17:11',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2022-04-27 18:17:11',
                'updated_at' => '2022-04-27 18:17:11',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2022-04-27 18:17:11',
                'updated_at' => '2022-04-27 18:17:11',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2022-04-27 18:17:11',
                'updated_at' => '2022-04-27 18:17:11',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2022-04-27 18:17:11',
                'updated_at' => '2022-04-27 18:17:11',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2022-04-27 18:17:11',
                'updated_at' => '2022-04-27 18:17:11',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2022-04-27 18:17:11',
                'updated_at' => '2022-04-27 18:17:11',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2022-04-27 18:17:11',
                'updated_at' => '2022-04-27 18:17:11',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_languages',
                'table_name' => 'languages',
                'created_at' => '2022-04-28 12:04:31',
                'updated_at' => '2022-04-28 12:04:31',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'read_languages',
                'table_name' => 'languages',
                'created_at' => '2022-04-28 12:04:31',
                'updated_at' => '2022-04-28 12:04:31',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'edit_languages',
                'table_name' => 'languages',
                'created_at' => '2022-04-28 12:04:31',
                'updated_at' => '2022-04-28 12:04:31',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'add_languages',
                'table_name' => 'languages',
                'created_at' => '2022-04-28 12:04:31',
                'updated_at' => '2022-04-28 12:04:31',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'delete_languages',
                'table_name' => 'languages',
                'created_at' => '2022-04-28 12:04:31',
                'updated_at' => '2022-04-28 12:04:31',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'browse_news',
                'table_name' => 'news',
                'created_at' => '2022-04-28 12:40:21',
                'updated_at' => '2022-04-28 12:40:21',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'read_news',
                'table_name' => 'news',
                'created_at' => '2022-04-28 12:40:21',
                'updated_at' => '2022-04-28 12:40:21',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'edit_news',
                'table_name' => 'news',
                'created_at' => '2022-04-28 12:40:21',
                'updated_at' => '2022-04-28 12:40:21',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'add_news',
                'table_name' => 'news',
                'created_at' => '2022-04-28 12:40:21',
                'updated_at' => '2022-04-28 12:40:21',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'delete_news',
                'table_name' => 'news',
                'created_at' => '2022-04-28 12:40:21',
                'updated_at' => '2022-04-28 12:40:21',
            ),
            35 => 
            array (
                'id' => 41,
                'key' => 'browse_contacts',
                'table_name' => 'contacts',
                'created_at' => '2022-04-28 18:34:28',
                'updated_at' => '2022-04-28 18:34:28',
            ),
            36 => 
            array (
                'id' => 42,
                'key' => 'read_contacts',
                'table_name' => 'contacts',
                'created_at' => '2022-04-28 18:34:28',
                'updated_at' => '2022-04-28 18:34:28',
            ),
            37 => 
            array (
                'id' => 43,
                'key' => 'edit_contacts',
                'table_name' => 'contacts',
                'created_at' => '2022-04-28 18:34:28',
                'updated_at' => '2022-04-28 18:34:28',
            ),
            38 => 
            array (
                'id' => 44,
                'key' => 'add_contacts',
                'table_name' => 'contacts',
                'created_at' => '2022-04-28 18:34:28',
                'updated_at' => '2022-04-28 18:34:28',
            ),
            39 => 
            array (
                'id' => 45,
                'key' => 'delete_contacts',
                'table_name' => 'contacts',
                'created_at' => '2022-04-28 18:34:28',
                'updated_at' => '2022-04-28 18:34:28',
            ),
            40 => 
            array (
                'id' => 46,
                'key' => 'browse_forpersons',
                'table_name' => 'forpersons',
                'created_at' => '2022-04-29 06:03:24',
                'updated_at' => '2022-04-29 06:03:24',
            ),
            41 => 
            array (
                'id' => 47,
                'key' => 'read_forpersons',
                'table_name' => 'forpersons',
                'created_at' => '2022-04-29 06:03:24',
                'updated_at' => '2022-04-29 06:03:24',
            ),
            42 => 
            array (
                'id' => 48,
                'key' => 'edit_forpersons',
                'table_name' => 'forpersons',
                'created_at' => '2022-04-29 06:03:24',
                'updated_at' => '2022-04-29 06:03:24',
            ),
            43 => 
            array (
                'id' => 49,
                'key' => 'add_forpersons',
                'table_name' => 'forpersons',
                'created_at' => '2022-04-29 06:03:24',
                'updated_at' => '2022-04-29 06:03:24',
            ),
            44 => 
            array (
                'id' => 50,
                'key' => 'delete_forpersons',
                'table_name' => 'forpersons',
                'created_at' => '2022-04-29 06:03:24',
                'updated_at' => '2022-04-29 06:03:24',
            ),
            45 => 
            array (
                'id' => 51,
                'key' => 'browse_services',
                'table_name' => 'services',
                'created_at' => '2022-04-29 06:22:54',
                'updated_at' => '2022-04-29 06:22:54',
            ),
            46 => 
            array (
                'id' => 52,
                'key' => 'read_services',
                'table_name' => 'services',
                'created_at' => '2022-04-29 06:22:54',
                'updated_at' => '2022-04-29 06:22:54',
            ),
            47 => 
            array (
                'id' => 53,
                'key' => 'edit_services',
                'table_name' => 'services',
                'created_at' => '2022-04-29 06:22:54',
                'updated_at' => '2022-04-29 06:22:54',
            ),
            48 => 
            array (
                'id' => 54,
                'key' => 'add_services',
                'table_name' => 'services',
                'created_at' => '2022-04-29 06:22:54',
                'updated_at' => '2022-04-29 06:22:54',
            ),
            49 => 
            array (
                'id' => 55,
                'key' => 'delete_services',
                'table_name' => 'services',
                'created_at' => '2022-04-29 06:22:54',
                'updated_at' => '2022-04-29 06:22:54',
            ),
            50 => 
            array (
                'id' => 56,
                'key' => 'browse_nmrcourts',
                'table_name' => 'nmrcourts',
                'created_at' => '2022-04-29 07:16:30',
                'updated_at' => '2022-04-29 07:16:30',
            ),
            51 => 
            array (
                'id' => 57,
                'key' => 'read_nmrcourts',
                'table_name' => 'nmrcourts',
                'created_at' => '2022-04-29 07:16:30',
                'updated_at' => '2022-04-29 07:16:30',
            ),
            52 => 
            array (
                'id' => 58,
                'key' => 'edit_nmrcourts',
                'table_name' => 'nmrcourts',
                'created_at' => '2022-04-29 07:16:30',
                'updated_at' => '2022-04-29 07:16:30',
            ),
            53 => 
            array (
                'id' => 59,
                'key' => 'add_nmrcourts',
                'table_name' => 'nmrcourts',
                'created_at' => '2022-04-29 07:16:30',
                'updated_at' => '2022-04-29 07:16:30',
            ),
            54 => 
            array (
                'id' => 60,
                'key' => 'delete_nmrcourts',
                'table_name' => 'nmrcourts',
                'created_at' => '2022-04-29 07:16:30',
                'updated_at' => '2022-04-29 07:16:30',
            ),
            55 => 
            array (
                'id' => 61,
                'key' => 'browse_langs',
                'table_name' => 'langs',
                'created_at' => '2022-04-29 08:33:42',
                'updated_at' => '2022-04-29 08:33:42',
            ),
            56 => 
            array (
                'id' => 62,
                'key' => 'read_langs',
                'table_name' => 'langs',
                'created_at' => '2022-04-29 08:33:42',
                'updated_at' => '2022-04-29 08:33:42',
            ),
            57 => 
            array (
                'id' => 63,
                'key' => 'edit_langs',
                'table_name' => 'langs',
                'created_at' => '2022-04-29 08:33:42',
                'updated_at' => '2022-04-29 08:33:42',
            ),
            58 => 
            array (
                'id' => 64,
                'key' => 'add_langs',
                'table_name' => 'langs',
                'created_at' => '2022-04-29 08:33:42',
                'updated_at' => '2022-04-29 08:33:42',
            ),
            59 => 
            array (
                'id' => 65,
                'key' => 'delete_langs',
                'table_name' => 'langs',
                'created_at' => '2022-04-29 08:33:42',
                'updated_at' => '2022-04-29 08:33:42',
            ),
            60 => 
            array (
                'id' => 66,
                'key' => 'browse_usefullinks',
                'table_name' => 'usefullinks',
                'created_at' => '2022-04-29 08:45:16',
                'updated_at' => '2022-04-29 08:45:16',
            ),
            61 => 
            array (
                'id' => 67,
                'key' => 'read_usefullinks',
                'table_name' => 'usefullinks',
                'created_at' => '2022-04-29 08:45:16',
                'updated_at' => '2022-04-29 08:45:16',
            ),
            62 => 
            array (
                'id' => 68,
                'key' => 'edit_usefullinks',
                'table_name' => 'usefullinks',
                'created_at' => '2022-04-29 08:45:16',
                'updated_at' => '2022-04-29 08:45:16',
            ),
            63 => 
            array (
                'id' => 69,
                'key' => 'add_usefullinks',
                'table_name' => 'usefullinks',
                'created_at' => '2022-04-29 08:45:16',
                'updated_at' => '2022-04-29 08:45:16',
            ),
            64 => 
            array (
                'id' => 70,
                'key' => 'delete_usefullinks',
                'table_name' => 'usefullinks',
                'created_at' => '2022-04-29 08:45:16',
                'updated_at' => '2022-04-29 08:45:16',
            ),
            65 => 
            array (
                'id' => 71,
                'key' => 'browse_footersocials',
                'table_name' => 'footersocials',
                'created_at' => '2022-04-29 10:04:39',
                'updated_at' => '2022-04-29 10:04:39',
            ),
            66 => 
            array (
                'id' => 72,
                'key' => 'read_footersocials',
                'table_name' => 'footersocials',
                'created_at' => '2022-04-29 10:04:39',
                'updated_at' => '2022-04-29 10:04:39',
            ),
            67 => 
            array (
                'id' => 73,
                'key' => 'edit_footersocials',
                'table_name' => 'footersocials',
                'created_at' => '2022-04-29 10:04:39',
                'updated_at' => '2022-04-29 10:04:39',
            ),
            68 => 
            array (
                'id' => 74,
                'key' => 'add_footersocials',
                'table_name' => 'footersocials',
                'created_at' => '2022-04-29 10:04:39',
                'updated_at' => '2022-04-29 10:04:39',
            ),
            69 => 
            array (
                'id' => 75,
                'key' => 'delete_footersocials',
                'table_name' => 'footersocials',
                'created_at' => '2022-04-29 10:04:39',
                'updated_at' => '2022-04-29 10:04:39',
            ),
            70 => 
            array (
                'id' => 76,
                'key' => 'browse_abouts',
                'table_name' => 'abouts',
                'created_at' => '2022-04-29 12:31:21',
                'updated_at' => '2022-04-29 12:31:21',
            ),
            71 => 
            array (
                'id' => 77,
                'key' => 'read_abouts',
                'table_name' => 'abouts',
                'created_at' => '2022-04-29 12:31:21',
                'updated_at' => '2022-04-29 12:31:21',
            ),
            72 => 
            array (
                'id' => 78,
                'key' => 'edit_abouts',
                'table_name' => 'abouts',
                'created_at' => '2022-04-29 12:31:21',
                'updated_at' => '2022-04-29 12:31:21',
            ),
            73 => 
            array (
                'id' => 79,
                'key' => 'add_abouts',
                'table_name' => 'abouts',
                'created_at' => '2022-04-29 12:31:21',
                'updated_at' => '2022-04-29 12:31:21',
            ),
            74 => 
            array (
                'id' => 80,
                'key' => 'delete_abouts',
                'table_name' => 'abouts',
                'created_at' => '2022-04-29 12:31:21',
                'updated_at' => '2022-04-29 12:31:21',
            ),
            75 => 
            array (
                'id' => 81,
                'key' => 'browse_colleges',
                'table_name' => 'colleges',
                'created_at' => '2022-04-29 13:32:27',
                'updated_at' => '2022-04-29 13:32:27',
            ),
            76 => 
            array (
                'id' => 82,
                'key' => 'read_colleges',
                'table_name' => 'colleges',
                'created_at' => '2022-04-29 13:32:27',
                'updated_at' => '2022-04-29 13:32:27',
            ),
            77 => 
            array (
                'id' => 83,
                'key' => 'edit_colleges',
                'table_name' => 'colleges',
                'created_at' => '2022-04-29 13:32:27',
                'updated_at' => '2022-04-29 13:32:27',
            ),
            78 => 
            array (
                'id' => 84,
                'key' => 'add_colleges',
                'table_name' => 'colleges',
                'created_at' => '2022-04-29 13:32:27',
                'updated_at' => '2022-04-29 13:32:27',
            ),
            79 => 
            array (
                'id' => 85,
                'key' => 'delete_colleges',
                'table_name' => 'colleges',
                'created_at' => '2022-04-29 13:32:27',
                'updated_at' => '2022-04-29 13:32:27',
            ),
            80 => 
            array (
                'id' => 86,
                'key' => 'browse_pages',
                'table_name' => 'pages',
                'created_at' => '2022-05-05 04:47:07',
                'updated_at' => '2022-05-05 04:47:07',
            ),
            81 => 
            array (
                'id' => 87,
                'key' => 'read_pages',
                'table_name' => 'pages',
                'created_at' => '2022-05-05 04:47:07',
                'updated_at' => '2022-05-05 04:47:07',
            ),
            82 => 
            array (
                'id' => 88,
                'key' => 'edit_pages',
                'table_name' => 'pages',
                'created_at' => '2022-05-05 04:47:07',
                'updated_at' => '2022-05-05 04:47:07',
            ),
            83 => 
            array (
                'id' => 89,
                'key' => 'add_pages',
                'table_name' => 'pages',
                'created_at' => '2022-05-05 04:47:07',
                'updated_at' => '2022-05-05 04:47:07',
            ),
            84 => 
            array (
                'id' => 90,
                'key' => 'delete_pages',
                'table_name' => 'pages',
                'created_at' => '2022-05-05 04:47:07',
                'updated_at' => '2022-05-05 04:47:07',
            ),
            85 => 
            array (
                'id' => 91,
                'key' => 'browse_faqs',
                'table_name' => 'faqs',
                'created_at' => '2022-05-05 12:28:37',
                'updated_at' => '2022-05-05 12:28:37',
            ),
            86 => 
            array (
                'id' => 92,
                'key' => 'read_faqs',
                'table_name' => 'faqs',
                'created_at' => '2022-05-05 12:28:37',
                'updated_at' => '2022-05-05 12:28:37',
            ),
            87 => 
            array (
                'id' => 93,
                'key' => 'edit_faqs',
                'table_name' => 'faqs',
                'created_at' => '2022-05-05 12:28:37',
                'updated_at' => '2022-05-05 12:28:37',
            ),
            88 => 
            array (
                'id' => 94,
                'key' => 'add_faqs',
                'table_name' => 'faqs',
                'created_at' => '2022-05-05 12:28:37',
                'updated_at' => '2022-05-05 12:28:37',
            ),
            89 => 
            array (
                'id' => 95,
                'key' => 'delete_faqs',
                'table_name' => 'faqs',
                'created_at' => '2022-05-05 12:28:37',
                'updated_at' => '2022-05-05 12:28:37',
            ),
            90 => 
            array (
                'id' => 96,
                'key' => 'browse_internationaldocuments',
                'table_name' => 'internationaldocuments',
                'created_at' => '2022-05-05 12:40:05',
                'updated_at' => '2022-05-05 12:40:05',
            ),
            91 => 
            array (
                'id' => 97,
                'key' => 'read_internationaldocuments',
                'table_name' => 'internationaldocuments',
                'created_at' => '2022-05-05 12:40:05',
                'updated_at' => '2022-05-05 12:40:05',
            ),
            92 => 
            array (
                'id' => 98,
                'key' => 'edit_internationaldocuments',
                'table_name' => 'internationaldocuments',
                'created_at' => '2022-05-05 12:40:05',
                'updated_at' => '2022-05-05 12:40:05',
            ),
            93 => 
            array (
                'id' => 99,
                'key' => 'add_internationaldocuments',
                'table_name' => 'internationaldocuments',
                'created_at' => '2022-05-05 12:40:05',
                'updated_at' => '2022-05-05 12:40:05',
            ),
            94 => 
            array (
                'id' => 100,
                'key' => 'delete_internationaldocuments',
                'table_name' => 'internationaldocuments',
                'created_at' => '2022-05-05 12:40:05',
                'updated_at' => '2022-05-05 12:40:05',
            ),
            95 => 
            array (
                'id' => 101,
                'key' => 'browse_legalacts',
                'table_name' => 'legalacts',
                'created_at' => '2022-05-05 12:56:54',
                'updated_at' => '2022-05-05 12:56:54',
            ),
            96 => 
            array (
                'id' => 102,
                'key' => 'read_legalacts',
                'table_name' => 'legalacts',
                'created_at' => '2022-05-05 12:56:54',
                'updated_at' => '2022-05-05 12:56:54',
            ),
            97 => 
            array (
                'id' => 103,
                'key' => 'edit_legalacts',
                'table_name' => 'legalacts',
                'created_at' => '2022-05-05 12:56:54',
                'updated_at' => '2022-05-05 12:56:54',
            ),
            98 => 
            array (
                'id' => 104,
                'key' => 'add_legalacts',
                'table_name' => 'legalacts',
                'created_at' => '2022-05-05 12:56:54',
                'updated_at' => '2022-05-05 12:56:54',
            ),
            99 => 
            array (
                'id' => 105,
                'key' => 'delete_legalacts',
                'table_name' => 'legalacts',
                'created_at' => '2022-05-05 12:56:54',
                'updated_at' => '2022-05-05 12:56:54',
            ),
            100 => 
            array (
                'id' => 106,
                'key' => 'browse_decisionpresidia',
                'table_name' => 'decisionpresidia',
                'created_at' => '2022-05-05 13:21:00',
                'updated_at' => '2022-05-05 13:21:00',
            ),
            101 => 
            array (
                'id' => 107,
                'key' => 'read_decisionpresidia',
                'table_name' => 'decisionpresidia',
                'created_at' => '2022-05-05 13:21:00',
                'updated_at' => '2022-05-05 13:21:00',
            ),
            102 => 
            array (
                'id' => 108,
                'key' => 'edit_decisionpresidia',
                'table_name' => 'decisionpresidia',
                'created_at' => '2022-05-05 13:21:00',
                'updated_at' => '2022-05-05 13:21:00',
            ),
            103 => 
            array (
                'id' => 109,
                'key' => 'add_decisionpresidia',
                'table_name' => 'decisionpresidia',
                'created_at' => '2022-05-05 13:21:00',
                'updated_at' => '2022-05-05 13:21:00',
            ),
            104 => 
            array (
                'id' => 110,
                'key' => 'delete_decisionpresidia',
                'table_name' => 'decisionpresidia',
                'created_at' => '2022-05-05 13:21:00',
                'updated_at' => '2022-05-05 13:21:00',
            ),
            105 => 
            array (
                'id' => 111,
                'key' => 'browse_speeches',
                'table_name' => 'speeches',
                'created_at' => '2022-05-05 13:40:29',
                'updated_at' => '2022-05-05 13:40:29',
            ),
            106 => 
            array (
                'id' => 112,
                'key' => 'read_speeches',
                'table_name' => 'speeches',
                'created_at' => '2022-05-05 13:40:29',
                'updated_at' => '2022-05-05 13:40:29',
            ),
            107 => 
            array (
                'id' => 113,
                'key' => 'edit_speeches',
                'table_name' => 'speeches',
                'created_at' => '2022-05-05 13:40:29',
                'updated_at' => '2022-05-05 13:40:29',
            ),
            108 => 
            array (
                'id' => 114,
                'key' => 'add_speeches',
                'table_name' => 'speeches',
                'created_at' => '2022-05-05 13:40:29',
                'updated_at' => '2022-05-05 13:40:29',
            ),
            109 => 
            array (
                'id' => 115,
                'key' => 'delete_speeches',
                'table_name' => 'speeches',
                'created_at' => '2022-05-05 13:40:29',
                'updated_at' => '2022-05-05 13:40:29',
            ),
        ));
        
        
    }
}