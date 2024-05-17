<?php

namespace App\Providers;

use App\Models\Category;
use App\Observers\CategoryObserver;
use Illuminate\Support\ServiceProvider;

class ObserverProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Category::observe(CategoryObserver::class);
    }
}
