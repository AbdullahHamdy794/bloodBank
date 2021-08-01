<?php

namespace App\Providers;

use App\Models\BloodType;
use App\Models\City;
use App\Models\Contact;
use App\Models\DanationRequest;
use App\Models\Post;
use App\Models\Setting;
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
        $bloodTypes = BloodType::paginate(10);
        $cities = City::paginate(10);
        $contact = Contact::get();
        $donations= DanationRequest::paginate(10);
        $settings = Setting::first() ?? new Setting;
        $postss = Post::all();
        view()->share(compact('settings','donations','cities','bloodTypes','contact','postss'));
    }
}
