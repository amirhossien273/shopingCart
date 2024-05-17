<?php

namespace App\Providers;

use App\Repository\BaseRepository;
use App\Repository\Cart\CartRepository;
use App\Repository\Cart\CartRepositoryInterface;
use App\Repository\CartItem\CartItemRepository;
use App\Repository\CartItem\CartItemRepositoryInterface;
use App\Repository\Category\CategoryRepository;
use App\Repository\Category\CategoryRepositoryInterface;
use App\Repository\EloquentRepositoryInterface;
use App\Repository\Product\ProductRepository;
use App\Repository\Product\ProductRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(EloquentRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
        $this->app->bind(CartRepositoryInterface::class, CartRepository::class);
        $this->app->bind(CartItemRepositoryInterface::class, CartItemRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
