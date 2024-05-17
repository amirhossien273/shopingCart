<?php

namespace App\Providers;

use App\Service\Cart\CartService;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class RouteCartIdProvider extends ServiceProvider
{

    public function boot(CartService $cartService)
    {
        Route::bind('cartId', function ($value) use($cartService) {
            return $cartService->generateCart(auth()->user());
        });
    }
}
