<?php

namespace App\Providers;

use App\Service\Cart\CartService;
use Illuminate\Routing\Route;
use Illuminate\Support\ServiceProvider;

class GenerateCartProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(CartService $cartService): void
    {
        $routesToCheck = ['cart'];

        if (in_array(Route::currentRouteName(), $routesToCheck)) {
            
            $cartService->generateCart(auth()->user());    
        }    
    }
}
