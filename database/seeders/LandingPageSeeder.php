<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LandingPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('landing_pages')->insert([
            'id' => 1,
            'logo' => '/img/logo-20211119003856.png',
            'hero_title' => 'Hero Title',
            'hero_subtitle' => 'Hero Subtitle',
            'hero_app_image' => '/img/logo-2021-11-19003856.png',
            'download_app_image' => '/img/logo-2021-11-19003842.png',
            'download_title' => 'download title',
            'download_subtitle' => 'download subtitle',
            'footer_desc' => 'footer',
            'url_appstore' => 'http://google.com',
            'url_googleplay' => 'http://google.com',
        ]);
    }
}
