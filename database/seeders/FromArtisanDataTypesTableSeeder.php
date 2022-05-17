<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FromArtisanDataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2022-04-27 18:17:11',
                'updated_at' => '2022-04-27 18:17:11',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2022-04-27 18:17:11',
                'updated_at' => '2022-04-27 18:17:11',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2022-04-27 18:17:11',
                'updated_at' => '2022-04-27 18:17:11',
            ),
            3 => 
            array (
                'id' => 7,
                'name' => 'contacts',
                'slug' => 'contacts',
                'display_name_singular' => 'Contact',
                'display_name_plural' => 'Contacts',
                'icon' => 'voyager-people',
                'model_name' => 'App\\Models\\Contact',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2022-04-28 18:34:28',
                'updated_at' => '2022-05-11 08:59:13',
            ),
            4 => 
            array (
                'id' => 13,
                'name' => 'forpersons',
                'slug' => 'forpersons',
                'display_name_singular' => 'Forperson',
                'display_name_plural' => 'Forpeople',
                'icon' => 'voyager-people',
                'model_name' => 'App\\Models\\Forpersons',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"id","order_display_column":null,"order_direction":"desc","default_search_key":null,"scope":null}',
                'created_at' => '2022-04-29 06:03:24',
                'updated_at' => '2022-05-11 09:00:23',
            ),
            5 => 
            array (
                'id' => 14,
                'name' => 'services',
                'slug' => 'services',
                'display_name_singular' => 'Service',
                'display_name_plural' => 'Services',
                'icon' => NULL,
                'model_name' => 'App\\Models\\Service',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2022-04-29 06:22:54',
                'updated_at' => '2022-05-11 10:12:34',
            ),
            6 => 
            array (
                'id' => 15,
                'name' => 'nmrcourts',
                'slug' => 'nmrcourts',
                'display_name_singular' => 'Nmrcourt',
                'display_name_plural' => 'Nmrcourts',
                'icon' => 'voyager-treasure',
                'model_name' => 'App\\Models\\Nmrcourt',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"id","order_display_column":null,"order_direction":"desc","default_search_key":null,"scope":null}',
                'created_at' => '2022-04-29 07:16:30',
                'updated_at' => '2022-05-11 10:11:20',
            ),
            7 => 
            array (
                'id' => 16,
                'name' => 'langs',
                'slug' => 'langs',
                'display_name_singular' => 'Lang',
                'display_name_plural' => 'Langs',
                'icon' => NULL,
                'model_name' => 'App\\Models\\Lang',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"id","order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2022-04-29 08:33:42',
                'updated_at' => '2022-05-11 10:10:06',
            ),
            8 => 
            array (
                'id' => 17,
                'name' => 'usefullinks',
                'slug' => 'usefullinks',
                'display_name_singular' => 'Usefullink',
                'display_name_plural' => 'Usefullinks',
                'icon' => 'voyager-credit-cards',
                'model_name' => 'App\\Models\\Usefullink',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"id","order_display_column":null,"order_direction":"desc","default_search_key":null,"scope":null}',
                'created_at' => '2022-04-29 08:45:16',
                'updated_at' => '2022-05-11 10:13:20',
            ),
            9 => 
            array (
                'id' => 19,
                'name' => 'abouts',
                'slug' => 'abouts',
                'display_name_singular' => 'About',
                'display_name_plural' => 'Abouts',
                'icon' => 'voyager-company',
                'model_name' => 'App\\Models\\About',
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\AboutController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"id","order_display_column":"title","order_direction":"desc","default_search_key":null}',
                'created_at' => '2022-04-29 12:31:20',
                'updated_at' => '2022-04-29 12:31:20',
            ),
            10 => 
            array (
                'id' => 22,
                'name' => 'pages',
                'slug' => 'pages',
                'display_name_singular' => 'Page',
                'display_name_plural' => 'Pages',
                'icon' => NULL,
                'model_name' => 'App\\Models\\Page',
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\PageController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2022-05-05 04:47:07',
                'updated_at' => '2022-05-05 05:00:29',
            ),
            11 => 
            array (
                'id' => 24,
                'name' => 'faqs',
                'slug' => 'faqs',
                'display_name_singular' => 'Faq',
                'display_name_plural' => 'Faqs',
                'icon' => NULL,
                'model_name' => 'App\\Models\\Faq',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"id","order_display_column":"title","order_direction":"desc","default_search_key":null,"scope":null}',
                'created_at' => '2022-05-05 12:28:37',
                'updated_at' => '2022-05-10 19:14:57',
            ),
            12 => 
            array (
                'id' => 25,
                'name' => 'internationaldocuments',
                'slug' => 'internationaldocuments',
                'display_name_singular' => 'Internationaldocument',
                'display_name_plural' => 'Internationaldocuments',
                'icon' => 'voyager-documentation',
                'model_name' => 'App\\Models\\Internationaldocument',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"id","order_display_column":"title","order_direction":"desc","default_search_key":null}',
                'created_at' => '2022-05-05 12:40:05',
                'updated_at' => '2022-05-05 12:40:05',
            ),
            13 => 
            array (
                'id' => 26,
                'name' => 'legalacts',
                'slug' => 'legalacts',
                'display_name_singular' => 'Legalact',
                'display_name_plural' => 'Legalacts',
                'icon' => 'voyager-zoom-in',
                'model_name' => 'App\\Models\\Legalact',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"id","order_display_column":"title","order_direction":"desc","default_search_key":null,"scope":null}',
                'created_at' => '2022-05-05 12:56:54',
                'updated_at' => '2022-05-06 12:38:30',
            ),
            14 => 
            array (
                'id' => 27,
                'name' => 'decisionpresidia',
                'slug' => 'decisionpresidia',
                'display_name_singular' => 'Decisionpresidium',
                'display_name_plural' => 'Decisionpresidia',
                'icon' => 'voyager-bookmark',
                'model_name' => 'App\\Models\\Decisionpresidium',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"id","order_display_column":"title","order_direction":"desc","default_search_key":null,"scope":null}',
                'created_at' => '2022-05-05 13:21:00',
                'updated_at' => '2022-05-10 13:27:31',
            ),
            15 => 
            array (
                'id' => 28,
                'name' => 'speeches',
                'slug' => 'speeches',
                'display_name_singular' => 'Speech',
                'display_name_plural' => 'Speeches',
                'icon' => 'voyager-check-circle',
                'model_name' => 'App\\Models\\Speech',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"id","order_display_column":"title","order_direction":"desc","default_search_key":null,"scope":null}',
                'created_at' => '2022-05-05 13:40:29',
                'updated_at' => '2022-05-10 16:28:55',
            ),
            16 => 
            array (
                'id' => 30,
                'name' => 'reports',
                'slug' => 'reports',
                'display_name_singular' => 'Report',
                'display_name_plural' => 'Reports',
                'icon' => 'voyager-list-add',
                'model_name' => 'App\\Models\\Report',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"id","order_display_column":"title","order_direction":"desc","default_search_key":null,"scope":null}',
                'created_at' => '2022-05-05 18:17:30',
                'updated_at' => '2022-05-10 13:52:01',
            ),
            17 => 
            array (
                'id' => 31,
                'name' => 'galleries',
                'slug' => 'galleries',
                'display_name_singular' => 'Gallery',
                'display_name_plural' => 'Galleries',
                'icon' => 'voyager-camera',
                'model_name' => 'App\\Models\\Gallery',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"id","order_display_column":"image","order_direction":"desc","default_search_key":null}',
                'created_at' => '2022-05-05 19:07:19',
                'updated_at' => '2022-05-05 19:07:19',
            ),
            18 => 
            array (
                'id' => 32,
                'name' => 'videos',
                'slug' => 'videos',
                'display_name_singular' => 'Video',
                'display_name_plural' => 'Videos',
                'icon' => 'voyager-video',
                'model_name' => 'App\\Models\\Video',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"id","order_display_column":"link","order_direction":"desc","default_search_key":null}',
                'created_at' => '2022-05-05 19:13:05',
                'updated_at' => '2022-05-05 19:13:05',
            ),
            19 => 
            array (
                'id' => 33,
                'name' => 'articles',
                'slug' => 'articles',
                'display_name_singular' => 'Article',
                'display_name_plural' => 'Articles',
                'icon' => 'voyager-news',
                'model_name' => 'App\\Models\\Article',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"id","order_display_column":"title","order_direction":"desc","default_search_key":null,"scope":null}',
                'created_at' => '2022-05-05 19:17:26',
                'updated_at' => '2022-05-11 05:56:32',
            ),
            20 => 
            array (
                'id' => 35,
                'name' => 'measures',
                'slug' => 'measures',
                'display_name_singular' => 'Measure',
                'display_name_plural' => 'Measures',
                'icon' => 'voyager-tv',
                'model_name' => 'App\\Models\\Measure',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"id","order_display_column":"title","order_direction":"desc","default_search_key":null,"scope":null}',
                'created_at' => '2022-05-05 19:25:26',
                'updated_at' => '2022-05-10 17:09:14',
            ),
            21 => 
            array (
                'id' => 36,
                'name' => 'educationmaterials',
                'slug' => 'educationmaterials',
                'display_name_singular' => 'Educationmaterial',
                'display_name_plural' => 'Educationmaterials',
                'icon' => 'voyager-lightbulb',
                'model_name' => 'App\\Models\\Educationmaterial',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"id","order_display_column":"title","order_direction":"desc","default_search_key":null,"scope":null}',
                'created_at' => '2022-05-05 19:47:45',
                'updated_at' => '2022-05-10 17:00:28',
            ),
            22 => 
            array (
                'id' => 37,
                'name' => 'supremecourts',
                'slug' => 'supremecourts',
                'display_name_singular' => 'Supremecourt',
                'display_name_plural' => 'Supremecourts',
                'icon' => 'voyager-window-list',
                'model_name' => 'App\\Models\\Supremecourt',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"id","order_display_column":"title","order_direction":"desc","default_search_key":null,"scope":null}',
                'created_at' => '2022-05-06 05:15:06',
                'updated_at' => '2022-05-10 17:27:49',
            ),
            23 => 
            array (
                'id' => 39,
                'name' => 'appeals',
                'slug' => 'appeals',
                'display_name_singular' => 'Appeal',
                'display_name_plural' => 'Appeals',
                'icon' => 'voyager-handle',
                'model_name' => 'App\\Models\\Appeal',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"id","order_display_column":"title","order_direction":"desc","default_search_key":null,"scope":null}',
                'created_at' => '2022-05-06 08:33:52',
                'updated_at' => '2022-05-10 17:34:19',
            ),
            24 => 
            array (
                'id' => 40,
                'name' => 'exampledocuments',
                'slug' => 'exampledocuments',
                'display_name_singular' => 'Exampledocument',
                'display_name_plural' => 'Exampledocuments',
                'icon' => 'voyager-browser',
                'model_name' => 'App\\Models\\Exampledocument',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"id","order_display_column":"title","order_direction":"desc","default_search_key":null,"scope":null}',
                'created_at' => '2022-05-06 10:17:00',
                'updated_at' => '2022-05-06 10:23:02',
            ),
            25 => 
            array (
                'id' => 41,
                'name' => 'publications',
                'slug' => 'publications',
                'display_name_singular' => 'Publication',
                'display_name_plural' => 'Publications',
                'icon' => 'voyager-terminal',
                'model_name' => 'App\\Models\\Publication',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"id","order_display_column":"image","order_direction":"desc","default_search_key":null,"scope":null}',
                'created_at' => '2022-05-06 11:05:09',
                'updated_at' => '2022-05-06 11:06:55',
            ),
            26 => 
            array (
                'id' => 42,
                'name' => 'electronlibraries',
                'slug' => 'electronlibraries',
                'display_name_singular' => 'Electronlibrary',
                'display_name_plural' => 'Electronlibraries',
                'icon' => 'voyager-belt',
                'model_name' => 'App\\Models\\Electronlibrary',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"id","order_display_column":"title","order_direction":"desc","default_search_key":null,"scope":null}',
                'created_at' => '2022-05-06 11:20:45',
                'updated_at' => '2022-05-10 18:03:25',
            ),
            27 => 
            array (
                'id' => 43,
                'name' => 'nmrelectronlibraries',
                'slug' => 'nmrelectronlibraries',
                'display_name_singular' => 'Nmrelectronlibrary',
                'display_name_plural' => 'Nmrelectronlibraries',
                'icon' => 'voyager-logbook',
                'model_name' => 'App\\Models\\Nmrelectronlibrary',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"id","order_display_column":"image","order_direction":"desc","default_search_key":null}',
                'created_at' => '2022-05-06 12:16:56',
                'updated_at' => '2022-05-06 12:16:56',
            ),
            28 => 
            array (
                'id' => 44,
                'name' => 'constitutions',
                'slug' => 'constitutions',
                'display_name_singular' => 'Constitution',
                'display_name_plural' => 'Constitutions',
                'icon' => 'voyager-edit',
                'model_name' => 'App\\Models\\Constitution',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"id","order_display_column":"title","order_direction":"desc","default_search_key":null}',
                'created_at' => '2022-05-06 12:54:30',
                'updated_at' => '2022-05-06 12:54:30',
            ),
            29 => 
            array (
                'id' => 45,
                'name' => 'news',
                'slug' => 'news',
                'display_name_singular' => 'News',
                'display_name_plural' => 'News',
                'icon' => 'voyager-credit-cards',
                'model_name' => 'App\\Models\\News',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"id","order_display_column":"title","order_direction":"desc","default_search_key":null}',
                'created_at' => '2022-05-11 05:57:45',
                'updated_at' => '2022-05-11 05:57:45',
            ),
            30 => 
            array (
                'id' => 46,
                'name' => 'applyonlines',
                'slug' => 'applyonlines',
                'display_name_singular' => 'Applyonline',
                'display_name_plural' => 'Applyonlines',
                'icon' => 'voyager-news',
                'model_name' => 'App\\Models\\Applyonline',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"id","order_display_column":"title","order_direction":"desc","default_search_key":null}',
                'created_at' => '2022-05-11 07:50:54',
                'updated_at' => '2022-05-11 07:50:54',
            ),
            31 => 
            array (
                'id' => 47,
                'name' => 'judicialapparats',
                'slug' => 'judicialapparats',
                'display_name_singular' => 'Judicialapparat',
                'display_name_plural' => 'Judicialapparats',
                'icon' => 'voyager-list-add',
                'model_name' => 'App\\Models\\Judicialapparat',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"id","order_display_column":"title","order_direction":"desc","default_search_key":null}',
                'created_at' => '2022-05-12 05:39:56',
                'updated_at' => '2022-05-12 05:39:56',
            ),
            32 => 
            array (
                'id' => 48,
                'name' => 'apparatuses',
                'slug' => 'apparatuses',
                'display_name_singular' => 'Apparatus',
                'display_name_plural' => 'Apparatuses',
                'icon' => 'voyager-list-add',
                'model_name' => 'App\\Models\\Apparatus',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"id","order_display_column":"title","order_direction":"desc","default_search_key":null,"scope":null}',
                'created_at' => '2022-05-12 05:54:18',
                'updated_at' => '2022-05-12 05:57:51',
            ),
            33 => 
            array (
                'id' => 49,
                'name' => 'titles',
                'slug' => 'titles',
                'display_name_singular' => 'Title',
                'display_name_plural' => 'Titles',
                'icon' => 'voyager-list-add',
                'model_name' => 'App\\Models\\Title',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"id","order_display_column":"title","order_direction":"desc","default_search_key":null}',
                'created_at' => '2022-05-12 06:18:54',
                'updated_at' => '2022-05-12 06:18:54',
            ),
            34 => 
            array (
                'id' => 51,
                'name' => 'adres',
                'slug' => 'adres',
                'display_name_singular' => 'Adre',
                'display_name_plural' => 'Adres',
                'icon' => 'voyager-cursor',
                'model_name' => 'App\\Models\\Adres',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"id","order_display_column":"title","order_direction":"desc","default_search_key":null,"scope":null}',
                'created_at' => '2022-05-12 13:05:22',
                'updated_at' => '2022-05-12 13:32:16',
            ),
            35 => 
            array (
                'id' => 52,
                'name' => 'footers',
                'slug' => 'footers',
                'display_name_singular' => 'Footer',
                'display_name_plural' => 'Footers',
                'icon' => 'voyager-credit-cards',
                'model_name' => 'App\\Models\\Footer',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"id","order_display_column":"title","order_direction":"desc","default_search_key":null}',
                'created_at' => '2022-05-14 08:52:08',
                'updated_at' => '2022-05-14 08:52:08',
            ),
            36 => 
            array (
                'id' => 53,
                'name' => 'slidertodays',
                'slug' => 'slidertodays',
                'display_name_singular' => 'Slidertoday',
                'display_name_plural' => 'Slidertodays',
                'icon' => 'voyager-double-up',
                'model_name' => 'App\\Models\\Slidertoday',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"id","order_display_column":"image","order_direction":"desc","default_search_key":null}',
                'created_at' => '2022-05-16 06:27:42',
                'updated_at' => '2022-05-16 06:27:42',
            ),
            37 => 
            array (
                'id' => 54,
                'name' => 'single_apparatuses',
                'slug' => 'single-apparatuses',
                'display_name_singular' => 'Single Apparatus',
                'display_name_plural' => 'Single Apparatuses',
                'icon' => 'voyager-people',
                'model_name' => 'App\\Models\\SingleApparatus',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"id","order_display_column":"title","order_direction":"desc","default_search_key":null}',
                'created_at' => '2022-05-17 16:13:48',
                'updated_at' => '2022-05-17 16:13:48',
            ),
            38 => 
            array (
                'id' => 60,
                'name' => 'apparats',
                'slug' => 'apparats',
                'display_name_singular' => 'Apparat',
                'display_name_plural' => 'Apparats',
                'icon' => 'voyager-credit-cards',
                'model_name' => 'App\\Models\\Apparats',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"id","order_display_column":"title","order_direction":"desc","default_search_key":null}',
                'created_at' => '2022-05-17 19:13:04',
                'updated_at' => '2022-05-17 19:13:04',
            ),
        ));
        
        
    }
}