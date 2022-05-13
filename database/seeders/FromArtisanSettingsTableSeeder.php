<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FromArtisanSettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'site.title',
                'display_name' => 'Site Title',
                'value' => 'Naxçıvan Muxtar Respublikası Ali Məhkəməsi',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Site',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'site.description',
                'display_name' => 'Site Description',
                'value' => 'Puste',
                'details' => '',
                'type' => 'text',
                'order' => 2,
                'group' => 'Site',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'site.logo',
                'display_name' => 'Site Logo',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 3,
                'group' => 'Site',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'site.google_analytics_tracking_id',
                'display_name' => 'Google Analytics Tracking ID',
                'value' => NULL,
                'details' => '',
                'type' => 'text',
                'order' => 4,
                'group' => 'Site',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'admin.bg_image',
                'display_name' => 'Admin Background Image',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 5,
                'group' => 'Admin',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'admin.title',
                'display_name' => 'Admin Title',
                'value' => 'Admin',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Admin',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'admin.description',
                'display_name' => 'Admin Description',
                'value' => 'Welcome to Voyager. The Missing Admin for Laravel',
                'details' => '',
                'type' => 'text',
                'order' => 2,
                'group' => 'Admin',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'admin.loader',
                'display_name' => 'Admin Loader',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 3,
                'group' => 'Admin',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'admin.icon_image',
                'display_name' => 'Admin Icon Image',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 4,
                'group' => 'Admin',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'admin.google_analytics_client_id',
            'display_name' => 'Google Analytics Client ID (used for admin dashboard)',
                'value' => NULL,
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Admin',
            ),
            10 => 
            array (
                'id' => 14,
                'key' => 'site.keywords',
                'display_name' => 'Site Keywords',
                'value' => 'Naxcivan Ali Mehkeme',
                'details' => NULL,
                'type' => 'text',
                'order' => 7,
                'group' => 'Site',
            ),
            11 => 
            array (
                'id' => 15,
                'key' => 'site.favicon',
                'display_name' => 'Site favicon',
                'value' => 'settings\\April2022\\ZADqrpHya8PKIAiSauNW.png',
                'details' => NULL,
                'type' => 'image',
                'order' => 8,
                'group' => 'Site',
            ),
            12 => 
            array (
                'id' => 16,
                'key' => 'site.footer',
                'display_name' => 'site footer',
                'value' => 'Tərtibat Və Proqramlaşdırma Naxçıvan Muxtar Respublikası Rabitə Və Yeni Texnologiyalar Nazirliyi',
                'details' => NULL,
                'type' => 'text_area',
                'order' => 9,
                'group' => 'Site',
            ),
            13 => 
            array (
                'id' => 17,
                'key' => 'site.address',
                'display_name' => 'site address',
                'value' => 'Ünvan: Naxçıvan şəhəri, AZ 7000, Atatürk küçəsi 19',
                'details' => NULL,
                'type' => 'text_area',
                'order' => 10,
                'group' => 'Site',
            ),
            14 => 
            array (
                'id' => 18,
                'key' => 'site.phone',
                'display_name' => 'site phone',
            'value' => 'Telefon: (036) 544-61-77',
                'details' => NULL,
                'type' => 'text',
                'order' => 11,
                'group' => 'Site',
            ),
            15 => 
            array (
                'id' => 19,
                'key' => 'site.email',
                'display_name' => 'site email',
                'value' => 'E-mail: alimehkeme@nakhchivan.az',
                'details' => NULL,
                'type' => 'text',
                'order' => 12,
                'group' => 'Site',
            ),
            16 => 
            array (
                'id' => 20,
                'key' => 'site.fax',
                'display_name' => 'site fax',
            'value' => 'Fax: (036) 550-12-77',
                'details' => NULL,
                'type' => 'text_area',
                'order' => 13,
                'group' => 'Site',
            ),
        ));
        
        
    }
}