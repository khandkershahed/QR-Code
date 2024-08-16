<?php

namespace App\Providers;

use App\Models\Admin\Site;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Exception;

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
        try {
            if (Schema::hasTable('sites')) {
                View::share('site', Site::first());
            } else {
                View::share('site', null);
            }

        } catch (Exception $e) {
            View::share('site', null);
        }
        Paginator::useBootstrap();

    }
}
