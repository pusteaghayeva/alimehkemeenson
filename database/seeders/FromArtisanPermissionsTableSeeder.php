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
                'id' => 41,
                'key' => 'browse_contacts',
                'table_name' => 'contacts',
                'created_at' => '2022-04-28 18:34:28',
                'updated_at' => '2022-04-28 18:34:28',
            ),
            26 => 
            array (
                'id' => 42,
                'key' => 'read_contacts',
                'table_name' => 'contacts',
                'created_at' => '2022-04-28 18:34:28',
                'updated_at' => '2022-04-28 18:34:28',
            ),
            27 => 
            array (
                'id' => 43,
                'key' => 'edit_contacts',
                'table_name' => 'contacts',
                'created_at' => '2022-04-28 18:34:28',
                'updated_at' => '2022-04-28 18:34:28',
            ),
            28 => 
            array (
                'id' => 44,
                'key' => 'add_contacts',
                'table_name' => 'contacts',
                'created_at' => '2022-04-28 18:34:28',
                'updated_at' => '2022-04-28 18:34:28',
            ),
            29 => 
            array (
                'id' => 45,
                'key' => 'delete_contacts',
                'table_name' => 'contacts',
                'created_at' => '2022-04-28 18:34:28',
                'updated_at' => '2022-04-28 18:34:28',
            ),
            30 => 
            array (
                'id' => 46,
                'key' => 'browse_forpersons',
                'table_name' => 'forpersons',
                'created_at' => '2022-04-29 06:03:24',
                'updated_at' => '2022-04-29 06:03:24',
            ),
            31 => 
            array (
                'id' => 47,
                'key' => 'read_forpersons',
                'table_name' => 'forpersons',
                'created_at' => '2022-04-29 06:03:24',
                'updated_at' => '2022-04-29 06:03:24',
            ),
            32 => 
            array (
                'id' => 48,
                'key' => 'edit_forpersons',
                'table_name' => 'forpersons',
                'created_at' => '2022-04-29 06:03:24',
                'updated_at' => '2022-04-29 06:03:24',
            ),
            33 => 
            array (
                'id' => 49,
                'key' => 'add_forpersons',
                'table_name' => 'forpersons',
                'created_at' => '2022-04-29 06:03:24',
                'updated_at' => '2022-04-29 06:03:24',
            ),
            34 => 
            array (
                'id' => 50,
                'key' => 'delete_forpersons',
                'table_name' => 'forpersons',
                'created_at' => '2022-04-29 06:03:24',
                'updated_at' => '2022-04-29 06:03:24',
            ),
            35 => 
            array (
                'id' => 51,
                'key' => 'browse_services',
                'table_name' => 'services',
                'created_at' => '2022-04-29 06:22:54',
                'updated_at' => '2022-04-29 06:22:54',
            ),
            36 => 
            array (
                'id' => 52,
                'key' => 'read_services',
                'table_name' => 'services',
                'created_at' => '2022-04-29 06:22:54',
                'updated_at' => '2022-04-29 06:22:54',
            ),
            37 => 
            array (
                'id' => 53,
                'key' => 'edit_services',
                'table_name' => 'services',
                'created_at' => '2022-04-29 06:22:54',
                'updated_at' => '2022-04-29 06:22:54',
            ),
            38 => 
            array (
                'id' => 54,
                'key' => 'add_services',
                'table_name' => 'services',
                'created_at' => '2022-04-29 06:22:54',
                'updated_at' => '2022-04-29 06:22:54',
            ),
            39 => 
            array (
                'id' => 55,
                'key' => 'delete_services',
                'table_name' => 'services',
                'created_at' => '2022-04-29 06:22:54',
                'updated_at' => '2022-04-29 06:22:54',
            ),
            40 => 
            array (
                'id' => 56,
                'key' => 'browse_nmrcourts',
                'table_name' => 'nmrcourts',
                'created_at' => '2022-04-29 07:16:30',
                'updated_at' => '2022-04-29 07:16:30',
            ),
            41 => 
            array (
                'id' => 57,
                'key' => 'read_nmrcourts',
                'table_name' => 'nmrcourts',
                'created_at' => '2022-04-29 07:16:30',
                'updated_at' => '2022-04-29 07:16:30',
            ),
            42 => 
            array (
                'id' => 58,
                'key' => 'edit_nmrcourts',
                'table_name' => 'nmrcourts',
                'created_at' => '2022-04-29 07:16:30',
                'updated_at' => '2022-04-29 07:16:30',
            ),
            43 => 
            array (
                'id' => 59,
                'key' => 'add_nmrcourts',
                'table_name' => 'nmrcourts',
                'created_at' => '2022-04-29 07:16:30',
                'updated_at' => '2022-04-29 07:16:30',
            ),
            44 => 
            array (
                'id' => 60,
                'key' => 'delete_nmrcourts',
                'table_name' => 'nmrcourts',
                'created_at' => '2022-04-29 07:16:30',
                'updated_at' => '2022-04-29 07:16:30',
            ),
            45 => 
            array (
                'id' => 61,
                'key' => 'browse_langs',
                'table_name' => 'langs',
                'created_at' => '2022-04-29 08:33:42',
                'updated_at' => '2022-04-29 08:33:42',
            ),
            46 => 
            array (
                'id' => 62,
                'key' => 'read_langs',
                'table_name' => 'langs',
                'created_at' => '2022-04-29 08:33:42',
                'updated_at' => '2022-04-29 08:33:42',
            ),
            47 => 
            array (
                'id' => 63,
                'key' => 'edit_langs',
                'table_name' => 'langs',
                'created_at' => '2022-04-29 08:33:42',
                'updated_at' => '2022-04-29 08:33:42',
            ),
            48 => 
            array (
                'id' => 64,
                'key' => 'add_langs',
                'table_name' => 'langs',
                'created_at' => '2022-04-29 08:33:42',
                'updated_at' => '2022-04-29 08:33:42',
            ),
            49 => 
            array (
                'id' => 65,
                'key' => 'delete_langs',
                'table_name' => 'langs',
                'created_at' => '2022-04-29 08:33:42',
                'updated_at' => '2022-04-29 08:33:42',
            ),
            50 => 
            array (
                'id' => 66,
                'key' => 'browse_usefullinks',
                'table_name' => 'usefullinks',
                'created_at' => '2022-04-29 08:45:16',
                'updated_at' => '2022-04-29 08:45:16',
            ),
            51 => 
            array (
                'id' => 67,
                'key' => 'read_usefullinks',
                'table_name' => 'usefullinks',
                'created_at' => '2022-04-29 08:45:16',
                'updated_at' => '2022-04-29 08:45:16',
            ),
            52 => 
            array (
                'id' => 68,
                'key' => 'edit_usefullinks',
                'table_name' => 'usefullinks',
                'created_at' => '2022-04-29 08:45:16',
                'updated_at' => '2022-04-29 08:45:16',
            ),
            53 => 
            array (
                'id' => 69,
                'key' => 'add_usefullinks',
                'table_name' => 'usefullinks',
                'created_at' => '2022-04-29 08:45:16',
                'updated_at' => '2022-04-29 08:45:16',
            ),
            54 => 
            array (
                'id' => 70,
                'key' => 'delete_usefullinks',
                'table_name' => 'usefullinks',
                'created_at' => '2022-04-29 08:45:16',
                'updated_at' => '2022-04-29 08:45:16',
            ),
            55 => 
            array (
                'id' => 76,
                'key' => 'browse_abouts',
                'table_name' => 'abouts',
                'created_at' => '2022-04-29 12:31:21',
                'updated_at' => '2022-04-29 12:31:21',
            ),
            56 => 
            array (
                'id' => 77,
                'key' => 'read_abouts',
                'table_name' => 'abouts',
                'created_at' => '2022-04-29 12:31:21',
                'updated_at' => '2022-04-29 12:31:21',
            ),
            57 => 
            array (
                'id' => 78,
                'key' => 'edit_abouts',
                'table_name' => 'abouts',
                'created_at' => '2022-04-29 12:31:21',
                'updated_at' => '2022-04-29 12:31:21',
            ),
            58 => 
            array (
                'id' => 79,
                'key' => 'add_abouts',
                'table_name' => 'abouts',
                'created_at' => '2022-04-29 12:31:21',
                'updated_at' => '2022-04-29 12:31:21',
            ),
            59 => 
            array (
                'id' => 80,
                'key' => 'delete_abouts',
                'table_name' => 'abouts',
                'created_at' => '2022-04-29 12:31:21',
                'updated_at' => '2022-04-29 12:31:21',
            ),
            60 => 
            array (
                'id' => 86,
                'key' => 'browse_pages',
                'table_name' => 'pages',
                'created_at' => '2022-05-05 04:47:07',
                'updated_at' => '2022-05-05 04:47:07',
            ),
            61 => 
            array (
                'id' => 87,
                'key' => 'read_pages',
                'table_name' => 'pages',
                'created_at' => '2022-05-05 04:47:07',
                'updated_at' => '2022-05-05 04:47:07',
            ),
            62 => 
            array (
                'id' => 88,
                'key' => 'edit_pages',
                'table_name' => 'pages',
                'created_at' => '2022-05-05 04:47:07',
                'updated_at' => '2022-05-05 04:47:07',
            ),
            63 => 
            array (
                'id' => 89,
                'key' => 'add_pages',
                'table_name' => 'pages',
                'created_at' => '2022-05-05 04:47:07',
                'updated_at' => '2022-05-05 04:47:07',
            ),
            64 => 
            array (
                'id' => 90,
                'key' => 'delete_pages',
                'table_name' => 'pages',
                'created_at' => '2022-05-05 04:47:07',
                'updated_at' => '2022-05-05 04:47:07',
            ),
            65 => 
            array (
                'id' => 91,
                'key' => 'browse_faqs',
                'table_name' => 'faqs',
                'created_at' => '2022-05-05 12:28:37',
                'updated_at' => '2022-05-05 12:28:37',
            ),
            66 => 
            array (
                'id' => 92,
                'key' => 'read_faqs',
                'table_name' => 'faqs',
                'created_at' => '2022-05-05 12:28:37',
                'updated_at' => '2022-05-05 12:28:37',
            ),
            67 => 
            array (
                'id' => 93,
                'key' => 'edit_faqs',
                'table_name' => 'faqs',
                'created_at' => '2022-05-05 12:28:37',
                'updated_at' => '2022-05-05 12:28:37',
            ),
            68 => 
            array (
                'id' => 94,
                'key' => 'add_faqs',
                'table_name' => 'faqs',
                'created_at' => '2022-05-05 12:28:37',
                'updated_at' => '2022-05-05 12:28:37',
            ),
            69 => 
            array (
                'id' => 95,
                'key' => 'delete_faqs',
                'table_name' => 'faqs',
                'created_at' => '2022-05-05 12:28:37',
                'updated_at' => '2022-05-05 12:28:37',
            ),
            70 => 
            array (
                'id' => 96,
                'key' => 'browse_internationaldocuments',
                'table_name' => 'internationaldocuments',
                'created_at' => '2022-05-05 12:40:05',
                'updated_at' => '2022-05-05 12:40:05',
            ),
            71 => 
            array (
                'id' => 97,
                'key' => 'read_internationaldocuments',
                'table_name' => 'internationaldocuments',
                'created_at' => '2022-05-05 12:40:05',
                'updated_at' => '2022-05-05 12:40:05',
            ),
            72 => 
            array (
                'id' => 98,
                'key' => 'edit_internationaldocuments',
                'table_name' => 'internationaldocuments',
                'created_at' => '2022-05-05 12:40:05',
                'updated_at' => '2022-05-05 12:40:05',
            ),
            73 => 
            array (
                'id' => 99,
                'key' => 'add_internationaldocuments',
                'table_name' => 'internationaldocuments',
                'created_at' => '2022-05-05 12:40:05',
                'updated_at' => '2022-05-05 12:40:05',
            ),
            74 => 
            array (
                'id' => 100,
                'key' => 'delete_internationaldocuments',
                'table_name' => 'internationaldocuments',
                'created_at' => '2022-05-05 12:40:05',
                'updated_at' => '2022-05-05 12:40:05',
            ),
            75 => 
            array (
                'id' => 101,
                'key' => 'browse_legalacts',
                'table_name' => 'legalacts',
                'created_at' => '2022-05-05 12:56:54',
                'updated_at' => '2022-05-05 12:56:54',
            ),
            76 => 
            array (
                'id' => 102,
                'key' => 'read_legalacts',
                'table_name' => 'legalacts',
                'created_at' => '2022-05-05 12:56:54',
                'updated_at' => '2022-05-05 12:56:54',
            ),
            77 => 
            array (
                'id' => 103,
                'key' => 'edit_legalacts',
                'table_name' => 'legalacts',
                'created_at' => '2022-05-05 12:56:54',
                'updated_at' => '2022-05-05 12:56:54',
            ),
            78 => 
            array (
                'id' => 104,
                'key' => 'add_legalacts',
                'table_name' => 'legalacts',
                'created_at' => '2022-05-05 12:56:54',
                'updated_at' => '2022-05-05 12:56:54',
            ),
            79 => 
            array (
                'id' => 105,
                'key' => 'delete_legalacts',
                'table_name' => 'legalacts',
                'created_at' => '2022-05-05 12:56:54',
                'updated_at' => '2022-05-05 12:56:54',
            ),
            80 => 
            array (
                'id' => 106,
                'key' => 'browse_decisionpresidia',
                'table_name' => 'decisionpresidia',
                'created_at' => '2022-05-05 13:21:00',
                'updated_at' => '2022-05-05 13:21:00',
            ),
            81 => 
            array (
                'id' => 107,
                'key' => 'read_decisionpresidia',
                'table_name' => 'decisionpresidia',
                'created_at' => '2022-05-05 13:21:00',
                'updated_at' => '2022-05-05 13:21:00',
            ),
            82 => 
            array (
                'id' => 108,
                'key' => 'edit_decisionpresidia',
                'table_name' => 'decisionpresidia',
                'created_at' => '2022-05-05 13:21:00',
                'updated_at' => '2022-05-05 13:21:00',
            ),
            83 => 
            array (
                'id' => 109,
                'key' => 'add_decisionpresidia',
                'table_name' => 'decisionpresidia',
                'created_at' => '2022-05-05 13:21:00',
                'updated_at' => '2022-05-05 13:21:00',
            ),
            84 => 
            array (
                'id' => 110,
                'key' => 'delete_decisionpresidia',
                'table_name' => 'decisionpresidia',
                'created_at' => '2022-05-05 13:21:00',
                'updated_at' => '2022-05-05 13:21:00',
            ),
            85 => 
            array (
                'id' => 111,
                'key' => 'browse_speeches',
                'table_name' => 'speeches',
                'created_at' => '2022-05-05 13:40:29',
                'updated_at' => '2022-05-05 13:40:29',
            ),
            86 => 
            array (
                'id' => 112,
                'key' => 'read_speeches',
                'table_name' => 'speeches',
                'created_at' => '2022-05-05 13:40:29',
                'updated_at' => '2022-05-05 13:40:29',
            ),
            87 => 
            array (
                'id' => 113,
                'key' => 'edit_speeches',
                'table_name' => 'speeches',
                'created_at' => '2022-05-05 13:40:29',
                'updated_at' => '2022-05-05 13:40:29',
            ),
            88 => 
            array (
                'id' => 114,
                'key' => 'add_speeches',
                'table_name' => 'speeches',
                'created_at' => '2022-05-05 13:40:29',
                'updated_at' => '2022-05-05 13:40:29',
            ),
            89 => 
            array (
                'id' => 115,
                'key' => 'delete_speeches',
                'table_name' => 'speeches',
                'created_at' => '2022-05-05 13:40:29',
                'updated_at' => '2022-05-05 13:40:29',
            ),
            90 => 
            array (
                'id' => 116,
                'key' => 'browse_reports',
                'table_name' => 'reports',
                'created_at' => '2022-05-05 18:17:30',
                'updated_at' => '2022-05-05 18:17:30',
            ),
            91 => 
            array (
                'id' => 117,
                'key' => 'read_reports',
                'table_name' => 'reports',
                'created_at' => '2022-05-05 18:17:30',
                'updated_at' => '2022-05-05 18:17:30',
            ),
            92 => 
            array (
                'id' => 118,
                'key' => 'edit_reports',
                'table_name' => 'reports',
                'created_at' => '2022-05-05 18:17:30',
                'updated_at' => '2022-05-05 18:17:30',
            ),
            93 => 
            array (
                'id' => 119,
                'key' => 'add_reports',
                'table_name' => 'reports',
                'created_at' => '2022-05-05 18:17:30',
                'updated_at' => '2022-05-05 18:17:30',
            ),
            94 => 
            array (
                'id' => 120,
                'key' => 'delete_reports',
                'table_name' => 'reports',
                'created_at' => '2022-05-05 18:17:30',
                'updated_at' => '2022-05-05 18:17:30',
            ),
            95 => 
            array (
                'id' => 121,
                'key' => 'browse_galleries',
                'table_name' => 'galleries',
                'created_at' => '2022-05-05 19:07:19',
                'updated_at' => '2022-05-05 19:07:19',
            ),
            96 => 
            array (
                'id' => 122,
                'key' => 'read_galleries',
                'table_name' => 'galleries',
                'created_at' => '2022-05-05 19:07:19',
                'updated_at' => '2022-05-05 19:07:19',
            ),
            97 => 
            array (
                'id' => 123,
                'key' => 'edit_galleries',
                'table_name' => 'galleries',
                'created_at' => '2022-05-05 19:07:19',
                'updated_at' => '2022-05-05 19:07:19',
            ),
            98 => 
            array (
                'id' => 124,
                'key' => 'add_galleries',
                'table_name' => 'galleries',
                'created_at' => '2022-05-05 19:07:19',
                'updated_at' => '2022-05-05 19:07:19',
            ),
            99 => 
            array (
                'id' => 125,
                'key' => 'delete_galleries',
                'table_name' => 'galleries',
                'created_at' => '2022-05-05 19:07:19',
                'updated_at' => '2022-05-05 19:07:19',
            ),
            100 => 
            array (
                'id' => 126,
                'key' => 'browse_videos',
                'table_name' => 'videos',
                'created_at' => '2022-05-05 19:13:05',
                'updated_at' => '2022-05-05 19:13:05',
            ),
            101 => 
            array (
                'id' => 127,
                'key' => 'read_videos',
                'table_name' => 'videos',
                'created_at' => '2022-05-05 19:13:05',
                'updated_at' => '2022-05-05 19:13:05',
            ),
            102 => 
            array (
                'id' => 128,
                'key' => 'edit_videos',
                'table_name' => 'videos',
                'created_at' => '2022-05-05 19:13:05',
                'updated_at' => '2022-05-05 19:13:05',
            ),
            103 => 
            array (
                'id' => 129,
                'key' => 'add_videos',
                'table_name' => 'videos',
                'created_at' => '2022-05-05 19:13:05',
                'updated_at' => '2022-05-05 19:13:05',
            ),
            104 => 
            array (
                'id' => 130,
                'key' => 'delete_videos',
                'table_name' => 'videos',
                'created_at' => '2022-05-05 19:13:05',
                'updated_at' => '2022-05-05 19:13:05',
            ),
            105 => 
            array (
                'id' => 131,
                'key' => 'browse_articles',
                'table_name' => 'articles',
                'created_at' => '2022-05-05 19:17:26',
                'updated_at' => '2022-05-05 19:17:26',
            ),
            106 => 
            array (
                'id' => 132,
                'key' => 'read_articles',
                'table_name' => 'articles',
                'created_at' => '2022-05-05 19:17:26',
                'updated_at' => '2022-05-05 19:17:26',
            ),
            107 => 
            array (
                'id' => 133,
                'key' => 'edit_articles',
                'table_name' => 'articles',
                'created_at' => '2022-05-05 19:17:26',
                'updated_at' => '2022-05-05 19:17:26',
            ),
            108 => 
            array (
                'id' => 134,
                'key' => 'add_articles',
                'table_name' => 'articles',
                'created_at' => '2022-05-05 19:17:26',
                'updated_at' => '2022-05-05 19:17:26',
            ),
            109 => 
            array (
                'id' => 135,
                'key' => 'delete_articles',
                'table_name' => 'articles',
                'created_at' => '2022-05-05 19:17:26',
                'updated_at' => '2022-05-05 19:17:26',
            ),
            110 => 
            array (
                'id' => 136,
                'key' => 'browse_measures',
                'table_name' => 'measures',
                'created_at' => '2022-05-05 19:25:26',
                'updated_at' => '2022-05-05 19:25:26',
            ),
            111 => 
            array (
                'id' => 137,
                'key' => 'read_measures',
                'table_name' => 'measures',
                'created_at' => '2022-05-05 19:25:26',
                'updated_at' => '2022-05-05 19:25:26',
            ),
            112 => 
            array (
                'id' => 138,
                'key' => 'edit_measures',
                'table_name' => 'measures',
                'created_at' => '2022-05-05 19:25:26',
                'updated_at' => '2022-05-05 19:25:26',
            ),
            113 => 
            array (
                'id' => 139,
                'key' => 'add_measures',
                'table_name' => 'measures',
                'created_at' => '2022-05-05 19:25:26',
                'updated_at' => '2022-05-05 19:25:26',
            ),
            114 => 
            array (
                'id' => 140,
                'key' => 'delete_measures',
                'table_name' => 'measures',
                'created_at' => '2022-05-05 19:25:26',
                'updated_at' => '2022-05-05 19:25:26',
            ),
            115 => 
            array (
                'id' => 141,
                'key' => 'browse_educationmaterials',
                'table_name' => 'educationmaterials',
                'created_at' => '2022-05-05 19:47:45',
                'updated_at' => '2022-05-05 19:47:45',
            ),
            116 => 
            array (
                'id' => 142,
                'key' => 'read_educationmaterials',
                'table_name' => 'educationmaterials',
                'created_at' => '2022-05-05 19:47:45',
                'updated_at' => '2022-05-05 19:47:45',
            ),
            117 => 
            array (
                'id' => 143,
                'key' => 'edit_educationmaterials',
                'table_name' => 'educationmaterials',
                'created_at' => '2022-05-05 19:47:45',
                'updated_at' => '2022-05-05 19:47:45',
            ),
            118 => 
            array (
                'id' => 144,
                'key' => 'add_educationmaterials',
                'table_name' => 'educationmaterials',
                'created_at' => '2022-05-05 19:47:45',
                'updated_at' => '2022-05-05 19:47:45',
            ),
            119 => 
            array (
                'id' => 145,
                'key' => 'delete_educationmaterials',
                'table_name' => 'educationmaterials',
                'created_at' => '2022-05-05 19:47:45',
                'updated_at' => '2022-05-05 19:47:45',
            ),
            120 => 
            array (
                'id' => 146,
                'key' => 'browse_supremecourts',
                'table_name' => 'supremecourts',
                'created_at' => '2022-05-06 05:15:06',
                'updated_at' => '2022-05-06 05:15:06',
            ),
            121 => 
            array (
                'id' => 147,
                'key' => 'read_supremecourts',
                'table_name' => 'supremecourts',
                'created_at' => '2022-05-06 05:15:06',
                'updated_at' => '2022-05-06 05:15:06',
            ),
            122 => 
            array (
                'id' => 148,
                'key' => 'edit_supremecourts',
                'table_name' => 'supremecourts',
                'created_at' => '2022-05-06 05:15:06',
                'updated_at' => '2022-05-06 05:15:06',
            ),
            123 => 
            array (
                'id' => 149,
                'key' => 'add_supremecourts',
                'table_name' => 'supremecourts',
                'created_at' => '2022-05-06 05:15:06',
                'updated_at' => '2022-05-06 05:15:06',
            ),
            124 => 
            array (
                'id' => 150,
                'key' => 'delete_supremecourts',
                'table_name' => 'supremecourts',
                'created_at' => '2022-05-06 05:15:06',
                'updated_at' => '2022-05-06 05:15:06',
            ),
            125 => 
            array (
                'id' => 156,
                'key' => 'browse_appeals',
                'table_name' => 'appeals',
                'created_at' => '2022-05-06 08:33:52',
                'updated_at' => '2022-05-06 08:33:52',
            ),
            126 => 
            array (
                'id' => 157,
                'key' => 'read_appeals',
                'table_name' => 'appeals',
                'created_at' => '2022-05-06 08:33:52',
                'updated_at' => '2022-05-06 08:33:52',
            ),
            127 => 
            array (
                'id' => 158,
                'key' => 'edit_appeals',
                'table_name' => 'appeals',
                'created_at' => '2022-05-06 08:33:52',
                'updated_at' => '2022-05-06 08:33:52',
            ),
            128 => 
            array (
                'id' => 159,
                'key' => 'add_appeals',
                'table_name' => 'appeals',
                'created_at' => '2022-05-06 08:33:52',
                'updated_at' => '2022-05-06 08:33:52',
            ),
            129 => 
            array (
                'id' => 160,
                'key' => 'delete_appeals',
                'table_name' => 'appeals',
                'created_at' => '2022-05-06 08:33:52',
                'updated_at' => '2022-05-06 08:33:52',
            ),
            130 => 
            array (
                'id' => 161,
                'key' => 'browse_exampledocuments',
                'table_name' => 'exampledocuments',
                'created_at' => '2022-05-06 10:17:00',
                'updated_at' => '2022-05-06 10:17:00',
            ),
            131 => 
            array (
                'id' => 162,
                'key' => 'read_exampledocuments',
                'table_name' => 'exampledocuments',
                'created_at' => '2022-05-06 10:17:00',
                'updated_at' => '2022-05-06 10:17:00',
            ),
            132 => 
            array (
                'id' => 163,
                'key' => 'edit_exampledocuments',
                'table_name' => 'exampledocuments',
                'created_at' => '2022-05-06 10:17:00',
                'updated_at' => '2022-05-06 10:17:00',
            ),
            133 => 
            array (
                'id' => 164,
                'key' => 'add_exampledocuments',
                'table_name' => 'exampledocuments',
                'created_at' => '2022-05-06 10:17:00',
                'updated_at' => '2022-05-06 10:17:00',
            ),
            134 => 
            array (
                'id' => 165,
                'key' => 'delete_exampledocuments',
                'table_name' => 'exampledocuments',
                'created_at' => '2022-05-06 10:17:00',
                'updated_at' => '2022-05-06 10:17:00',
            ),
            135 => 
            array (
                'id' => 166,
                'key' => 'browse_publications',
                'table_name' => 'publications',
                'created_at' => '2022-05-06 11:05:09',
                'updated_at' => '2022-05-06 11:05:09',
            ),
            136 => 
            array (
                'id' => 167,
                'key' => 'read_publications',
                'table_name' => 'publications',
                'created_at' => '2022-05-06 11:05:09',
                'updated_at' => '2022-05-06 11:05:09',
            ),
            137 => 
            array (
                'id' => 168,
                'key' => 'edit_publications',
                'table_name' => 'publications',
                'created_at' => '2022-05-06 11:05:09',
                'updated_at' => '2022-05-06 11:05:09',
            ),
            138 => 
            array (
                'id' => 169,
                'key' => 'add_publications',
                'table_name' => 'publications',
                'created_at' => '2022-05-06 11:05:09',
                'updated_at' => '2022-05-06 11:05:09',
            ),
            139 => 
            array (
                'id' => 170,
                'key' => 'delete_publications',
                'table_name' => 'publications',
                'created_at' => '2022-05-06 11:05:09',
                'updated_at' => '2022-05-06 11:05:09',
            ),
            140 => 
            array (
                'id' => 171,
                'key' => 'browse_electronlibraries',
                'table_name' => 'electronlibraries',
                'created_at' => '2022-05-06 11:20:45',
                'updated_at' => '2022-05-06 11:20:45',
            ),
            141 => 
            array (
                'id' => 172,
                'key' => 'read_electronlibraries',
                'table_name' => 'electronlibraries',
                'created_at' => '2022-05-06 11:20:45',
                'updated_at' => '2022-05-06 11:20:45',
            ),
            142 => 
            array (
                'id' => 173,
                'key' => 'edit_electronlibraries',
                'table_name' => 'electronlibraries',
                'created_at' => '2022-05-06 11:20:45',
                'updated_at' => '2022-05-06 11:20:45',
            ),
            143 => 
            array (
                'id' => 174,
                'key' => 'add_electronlibraries',
                'table_name' => 'electronlibraries',
                'created_at' => '2022-05-06 11:20:45',
                'updated_at' => '2022-05-06 11:20:45',
            ),
            144 => 
            array (
                'id' => 175,
                'key' => 'delete_electronlibraries',
                'table_name' => 'electronlibraries',
                'created_at' => '2022-05-06 11:20:45',
                'updated_at' => '2022-05-06 11:20:45',
            ),
            145 => 
            array (
                'id' => 176,
                'key' => 'browse_nmrelectronlibraries',
                'table_name' => 'nmrelectronlibraries',
                'created_at' => '2022-05-06 12:16:56',
                'updated_at' => '2022-05-06 12:16:56',
            ),
            146 => 
            array (
                'id' => 177,
                'key' => 'read_nmrelectronlibraries',
                'table_name' => 'nmrelectronlibraries',
                'created_at' => '2022-05-06 12:16:56',
                'updated_at' => '2022-05-06 12:16:56',
            ),
            147 => 
            array (
                'id' => 178,
                'key' => 'edit_nmrelectronlibraries',
                'table_name' => 'nmrelectronlibraries',
                'created_at' => '2022-05-06 12:16:56',
                'updated_at' => '2022-05-06 12:16:56',
            ),
            148 => 
            array (
                'id' => 179,
                'key' => 'add_nmrelectronlibraries',
                'table_name' => 'nmrelectronlibraries',
                'created_at' => '2022-05-06 12:16:56',
                'updated_at' => '2022-05-06 12:16:56',
            ),
            149 => 
            array (
                'id' => 180,
                'key' => 'delete_nmrelectronlibraries',
                'table_name' => 'nmrelectronlibraries',
                'created_at' => '2022-05-06 12:16:56',
                'updated_at' => '2022-05-06 12:16:56',
            ),
            150 => 
            array (
                'id' => 181,
                'key' => 'browse_constitutions',
                'table_name' => 'constitutions',
                'created_at' => '2022-05-06 12:54:31',
                'updated_at' => '2022-05-06 12:54:31',
            ),
            151 => 
            array (
                'id' => 182,
                'key' => 'read_constitutions',
                'table_name' => 'constitutions',
                'created_at' => '2022-05-06 12:54:31',
                'updated_at' => '2022-05-06 12:54:31',
            ),
            152 => 
            array (
                'id' => 183,
                'key' => 'edit_constitutions',
                'table_name' => 'constitutions',
                'created_at' => '2022-05-06 12:54:31',
                'updated_at' => '2022-05-06 12:54:31',
            ),
            153 => 
            array (
                'id' => 184,
                'key' => 'add_constitutions',
                'table_name' => 'constitutions',
                'created_at' => '2022-05-06 12:54:31',
                'updated_at' => '2022-05-06 12:54:31',
            ),
            154 => 
            array (
                'id' => 185,
                'key' => 'delete_constitutions',
                'table_name' => 'constitutions',
                'created_at' => '2022-05-06 12:54:31',
                'updated_at' => '2022-05-06 12:54:31',
            ),
            155 => 
            array (
                'id' => 186,
                'key' => 'browse_news',
                'table_name' => 'news',
                'created_at' => '2022-05-11 05:57:45',
                'updated_at' => '2022-05-11 05:57:45',
            ),
            156 => 
            array (
                'id' => 187,
                'key' => 'read_news',
                'table_name' => 'news',
                'created_at' => '2022-05-11 05:57:45',
                'updated_at' => '2022-05-11 05:57:45',
            ),
            157 => 
            array (
                'id' => 188,
                'key' => 'edit_news',
                'table_name' => 'news',
                'created_at' => '2022-05-11 05:57:45',
                'updated_at' => '2022-05-11 05:57:45',
            ),
            158 => 
            array (
                'id' => 189,
                'key' => 'add_news',
                'table_name' => 'news',
                'created_at' => '2022-05-11 05:57:45',
                'updated_at' => '2022-05-11 05:57:45',
            ),
            159 => 
            array (
                'id' => 190,
                'key' => 'delete_news',
                'table_name' => 'news',
                'created_at' => '2022-05-11 05:57:45',
                'updated_at' => '2022-05-11 05:57:45',
            ),
            160 => 
            array (
                'id' => 191,
                'key' => 'browse_applyonlines',
                'table_name' => 'applyonlines',
                'created_at' => '2022-05-11 07:50:54',
                'updated_at' => '2022-05-11 07:50:54',
            ),
            161 => 
            array (
                'id' => 192,
                'key' => 'read_applyonlines',
                'table_name' => 'applyonlines',
                'created_at' => '2022-05-11 07:50:54',
                'updated_at' => '2022-05-11 07:50:54',
            ),
            162 => 
            array (
                'id' => 193,
                'key' => 'edit_applyonlines',
                'table_name' => 'applyonlines',
                'created_at' => '2022-05-11 07:50:54',
                'updated_at' => '2022-05-11 07:50:54',
            ),
            163 => 
            array (
                'id' => 194,
                'key' => 'add_applyonlines',
                'table_name' => 'applyonlines',
                'created_at' => '2022-05-11 07:50:54',
                'updated_at' => '2022-05-11 07:50:54',
            ),
            164 => 
            array (
                'id' => 195,
                'key' => 'delete_applyonlines',
                'table_name' => 'applyonlines',
                'created_at' => '2022-05-11 07:50:54',
                'updated_at' => '2022-05-11 07:50:54',
            ),
            165 => 
            array (
                'id' => 196,
                'key' => 'browse_judicialapparats',
                'table_name' => 'judicialapparats',
                'created_at' => '2022-05-12 05:39:56',
                'updated_at' => '2022-05-12 05:39:56',
            ),
            166 => 
            array (
                'id' => 197,
                'key' => 'read_judicialapparats',
                'table_name' => 'judicialapparats',
                'created_at' => '2022-05-12 05:39:56',
                'updated_at' => '2022-05-12 05:39:56',
            ),
            167 => 
            array (
                'id' => 198,
                'key' => 'edit_judicialapparats',
                'table_name' => 'judicialapparats',
                'created_at' => '2022-05-12 05:39:56',
                'updated_at' => '2022-05-12 05:39:56',
            ),
            168 => 
            array (
                'id' => 199,
                'key' => 'add_judicialapparats',
                'table_name' => 'judicialapparats',
                'created_at' => '2022-05-12 05:39:56',
                'updated_at' => '2022-05-12 05:39:56',
            ),
            169 => 
            array (
                'id' => 200,
                'key' => 'delete_judicialapparats',
                'table_name' => 'judicialapparats',
                'created_at' => '2022-05-12 05:39:56',
                'updated_at' => '2022-05-12 05:39:56',
            ),
            170 => 
            array (
                'id' => 201,
                'key' => 'browse_apparatuses',
                'table_name' => 'apparatuses',
                'created_at' => '2022-05-12 05:54:18',
                'updated_at' => '2022-05-12 05:54:18',
            ),
            171 => 
            array (
                'id' => 202,
                'key' => 'read_apparatuses',
                'table_name' => 'apparatuses',
                'created_at' => '2022-05-12 05:54:18',
                'updated_at' => '2022-05-12 05:54:18',
            ),
            172 => 
            array (
                'id' => 203,
                'key' => 'edit_apparatuses',
                'table_name' => 'apparatuses',
                'created_at' => '2022-05-12 05:54:18',
                'updated_at' => '2022-05-12 05:54:18',
            ),
            173 => 
            array (
                'id' => 204,
                'key' => 'add_apparatuses',
                'table_name' => 'apparatuses',
                'created_at' => '2022-05-12 05:54:18',
                'updated_at' => '2022-05-12 05:54:18',
            ),
            174 => 
            array (
                'id' => 205,
                'key' => 'delete_apparatuses',
                'table_name' => 'apparatuses',
                'created_at' => '2022-05-12 05:54:18',
                'updated_at' => '2022-05-12 05:54:18',
            ),
            175 => 
            array (
                'id' => 206,
                'key' => 'browse_titles',
                'table_name' => 'titles',
                'created_at' => '2022-05-12 06:18:54',
                'updated_at' => '2022-05-12 06:18:54',
            ),
            176 => 
            array (
                'id' => 207,
                'key' => 'read_titles',
                'table_name' => 'titles',
                'created_at' => '2022-05-12 06:18:54',
                'updated_at' => '2022-05-12 06:18:54',
            ),
            177 => 
            array (
                'id' => 208,
                'key' => 'edit_titles',
                'table_name' => 'titles',
                'created_at' => '2022-05-12 06:18:54',
                'updated_at' => '2022-05-12 06:18:54',
            ),
            178 => 
            array (
                'id' => 209,
                'key' => 'add_titles',
                'table_name' => 'titles',
                'created_at' => '2022-05-12 06:18:54',
                'updated_at' => '2022-05-12 06:18:54',
            ),
            179 => 
            array (
                'id' => 210,
                'key' => 'delete_titles',
                'table_name' => 'titles',
                'created_at' => '2022-05-12 06:18:54',
                'updated_at' => '2022-05-12 06:18:54',
            ),
            180 => 
            array (
                'id' => 216,
                'key' => 'browse_adres',
                'table_name' => 'adres',
                'created_at' => '2022-05-12 13:05:22',
                'updated_at' => '2022-05-12 13:05:22',
            ),
            181 => 
            array (
                'id' => 217,
                'key' => 'read_adres',
                'table_name' => 'adres',
                'created_at' => '2022-05-12 13:05:22',
                'updated_at' => '2022-05-12 13:05:22',
            ),
            182 => 
            array (
                'id' => 218,
                'key' => 'edit_adres',
                'table_name' => 'adres',
                'created_at' => '2022-05-12 13:05:22',
                'updated_at' => '2022-05-12 13:05:22',
            ),
            183 => 
            array (
                'id' => 219,
                'key' => 'add_adres',
                'table_name' => 'adres',
                'created_at' => '2022-05-12 13:05:22',
                'updated_at' => '2022-05-12 13:05:22',
            ),
            184 => 
            array (
                'id' => 220,
                'key' => 'delete_adres',
                'table_name' => 'adres',
                'created_at' => '2022-05-12 13:05:22',
                'updated_at' => '2022-05-12 13:05:22',
            ),
            185 => 
            array (
                'id' => 221,
                'key' => 'browse_footers',
                'table_name' => 'footers',
                'created_at' => '2022-05-14 08:52:08',
                'updated_at' => '2022-05-14 08:52:08',
            ),
            186 => 
            array (
                'id' => 222,
                'key' => 'read_footers',
                'table_name' => 'footers',
                'created_at' => '2022-05-14 08:52:08',
                'updated_at' => '2022-05-14 08:52:08',
            ),
            187 => 
            array (
                'id' => 223,
                'key' => 'edit_footers',
                'table_name' => 'footers',
                'created_at' => '2022-05-14 08:52:08',
                'updated_at' => '2022-05-14 08:52:08',
            ),
            188 => 
            array (
                'id' => 224,
                'key' => 'add_footers',
                'table_name' => 'footers',
                'created_at' => '2022-05-14 08:52:08',
                'updated_at' => '2022-05-14 08:52:08',
            ),
            189 => 
            array (
                'id' => 225,
                'key' => 'delete_footers',
                'table_name' => 'footers',
                'created_at' => '2022-05-14 08:52:08',
                'updated_at' => '2022-05-14 08:52:08',
            ),
            190 => 
            array (
                'id' => 226,
                'key' => 'browse_slidertodays',
                'table_name' => 'slidertodays',
                'created_at' => '2022-05-16 06:27:42',
                'updated_at' => '2022-05-16 06:27:42',
            ),
            191 => 
            array (
                'id' => 227,
                'key' => 'read_slidertodays',
                'table_name' => 'slidertodays',
                'created_at' => '2022-05-16 06:27:42',
                'updated_at' => '2022-05-16 06:27:42',
            ),
            192 => 
            array (
                'id' => 228,
                'key' => 'edit_slidertodays',
                'table_name' => 'slidertodays',
                'created_at' => '2022-05-16 06:27:42',
                'updated_at' => '2022-05-16 06:27:42',
            ),
            193 => 
            array (
                'id' => 229,
                'key' => 'add_slidertodays',
                'table_name' => 'slidertodays',
                'created_at' => '2022-05-16 06:27:42',
                'updated_at' => '2022-05-16 06:27:42',
            ),
            194 => 
            array (
                'id' => 230,
                'key' => 'delete_slidertodays',
                'table_name' => 'slidertodays',
                'created_at' => '2022-05-16 06:27:42',
                'updated_at' => '2022-05-16 06:27:42',
            ),
            195 => 
            array (
                'id' => 231,
                'key' => 'browse_single_apparatuses',
                'table_name' => 'single_apparatuses',
                'created_at' => '2022-05-17 16:13:48',
                'updated_at' => '2022-05-17 16:13:48',
            ),
            196 => 
            array (
                'id' => 232,
                'key' => 'read_single_apparatuses',
                'table_name' => 'single_apparatuses',
                'created_at' => '2022-05-17 16:13:48',
                'updated_at' => '2022-05-17 16:13:48',
            ),
            197 => 
            array (
                'id' => 233,
                'key' => 'edit_single_apparatuses',
                'table_name' => 'single_apparatuses',
                'created_at' => '2022-05-17 16:13:48',
                'updated_at' => '2022-05-17 16:13:48',
            ),
            198 => 
            array (
                'id' => 234,
                'key' => 'add_single_apparatuses',
                'table_name' => 'single_apparatuses',
                'created_at' => '2022-05-17 16:13:48',
                'updated_at' => '2022-05-17 16:13:48',
            ),
            199 => 
            array (
                'id' => 235,
                'key' => 'delete_single_apparatuses',
                'table_name' => 'single_apparatuses',
                'created_at' => '2022-05-17 16:13:48',
                'updated_at' => '2022-05-17 16:13:48',
            ),
            200 => 
            array (
                'id' => 246,
                'key' => 'browse_apparats',
                'table_name' => 'apparats',
                'created_at' => '2022-05-17 19:13:05',
                'updated_at' => '2022-05-17 19:13:05',
            ),
            201 => 
            array (
                'id' => 247,
                'key' => 'read_apparats',
                'table_name' => 'apparats',
                'created_at' => '2022-05-17 19:13:05',
                'updated_at' => '2022-05-17 19:13:05',
            ),
            202 => 
            array (
                'id' => 248,
                'key' => 'edit_apparats',
                'table_name' => 'apparats',
                'created_at' => '2022-05-17 19:13:05',
                'updated_at' => '2022-05-17 19:13:05',
            ),
            203 => 
            array (
                'id' => 249,
                'key' => 'add_apparats',
                'table_name' => 'apparats',
                'created_at' => '2022-05-17 19:13:05',
                'updated_at' => '2022-05-17 19:13:05',
            ),
            204 => 
            array (
                'id' => 250,
                'key' => 'delete_apparats',
                'table_name' => 'apparats',
                'created_at' => '2022-05-17 19:13:05',
                'updated_at' => '2022-05-17 19:13:05',
            ),
        ));
        
        
    }
}