<?php

namespace DeFaoite\Category\Providers;

use Illuminate\Support\ServiceProvider;
use DeFaoite\Category\Models\CategoryProxy;
use DeFaoite\Category\Observers\CategoryObserver;

class CategoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__.'/../Database/Migrations');

        CategoryProxy::observe(CategoryObserver::class);
    }
}
