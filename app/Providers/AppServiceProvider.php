<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();

        $websiteSetting = Setting::first() ?? (object) [
            'website_name' => 'Default Website Name',
            'website_url' => 'https://defaulturl.com',
            'page_title' => 'Default Page Title',
            'meta_keyword' => 'default, keywords',
            'meta_description' => 'Default meta description for the website.',
            'address' => 'Default Address',
            'phone1' => 'Default Phone',
            'phone2' => 'Default Phone 2',
            'email1' => 'Default Email',
            'email2' => 'Default Email 2',
            'facebook' => null,
            'twitter' => null,
            'instagram' => null,
            'youtube' => null,
        ];

        View::share('appSetting', $websiteSetting);

        \Log::info('App Setting:', ['appSetting' => $websiteSetting]);
    }
}
