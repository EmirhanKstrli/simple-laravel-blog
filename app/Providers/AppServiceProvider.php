<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\App;
use App\Models\Config;
use Route;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);
        setlocale(LC_TIME, 'tr_TR');
        Carbon::setLocale('tr');
        App::setLocale('tr');

        Route::resourceVerbs([
            'create' => 'olustur',
            'edit'=> 'guncelle',
        ]);
    }
}
