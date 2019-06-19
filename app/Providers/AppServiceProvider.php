<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use App\Models\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $countries = Country::all();
        $states = State::all();
        $cities = City::all();
        $categories = Category::where('parent_id',0)->get();
        view()->share(['countries'=>$countries,'states'=>$states,'cities'=>$cities,'categories'=>$categories]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
