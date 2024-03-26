<?php

namespace App\Providers;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class BreadcrumbServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $breadcrumbs = collect(request()->segments())->map(function ($segment, $key) {
            // dd(ucfirst($segment));
            return [
                'url' => '/' . implode('/', array_slice(request()->segments(), 0, $key + 1)),
                'name' => ucfirst($segment),
            ];
        })->toArray();

        View::share('breadcrumbs', $breadcrumbs);

    }
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
