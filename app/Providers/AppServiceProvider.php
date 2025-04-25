<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator as PaginationPaginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        PaginationPaginator::useTailwind();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}