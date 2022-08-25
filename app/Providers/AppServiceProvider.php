<?php

namespace App\Providers;

use App\Models\Doctor;
use App\Models\ProfileInfo;
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
        view()->composer(
            // $doctors = DB::table('doctors')->select('firstname')->get();
            'app.blade.php',
            function ($view) {
                $view->with('profileinfo' , ProfileInfo::all());
            }
        );
    }
}
