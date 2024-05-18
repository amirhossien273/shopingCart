<?php

namespace App\Providers;

use App\Models\User;
use App\Service\Cart\CartService;
use Illuminate\Support\Facades\Route; 
use Illuminate\Http\Request;
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
    public function boot(Request $request, CartService $cartService): void
    {
        if ($request->is('cart')) {
            
            $cartService->generateCart(User::find(1), $request->product_id);    
        }    
    }
}
