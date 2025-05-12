<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            // Default values for the settings
            'website_name' => '🛒 QBuy',
            'website_url' => 'https://www.QBuy.com',
            'page_title' => 'Welcome to QBuy',
            'page_description' => 'Discover the best products at unbeatable prices.',
            // Meta tags for SEO
            'meta_title' => 'QBuy - Your Online Shopping Destination',
            'meta_keyword' => 'e-commerce, online shopping, buy online',
            'meta_description' => 'The best place to buy products online.',
            // Contact information
            'address' => 'Jirkov, Czech Republic',
            'phone1' => '776-592-542',
            'phone2' => '098-765-4321',
            'email1' => 'QBuy@example.com',
            'email2' => 'info@example.com',
            // Social media links
            // These can be empty or null if not used
            'facebook' => 'https://facebook.com',
            'twitter' => 'https://twitter.com',
            'instagram' => 'https://instagram.com',
            'youtube' => 'https://youtube.com',
        ]);
    }
}
