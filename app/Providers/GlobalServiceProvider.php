<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
class GlobalServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
       view()->composer('layouts.front.app', function ($view) {
             $restaurants = Restaurant::orderby('id', 'desc')->get();
             $view->with('user', Auth::guard('admin')->user());
            $view->with('restaurants', $restaurants);
        });

       view()->composer('layouts.admin.header', function ($view) {
             $view->with('user', Auth::guard('admin')->user());
            
        });
       view()->composer('layouts.admin.sidebar', function ($view) {
             $view->with('user', Auth::guard('admin')->user());
            
        });
    }   


    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
