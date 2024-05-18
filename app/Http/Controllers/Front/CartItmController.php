<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\CartItem\CartItemStoreRequest;
use App\Models\User;
use App\Service\Cart\CartService;

class CartItmController extends Controller
{
    public function store(CartItemStoreRequest $request, CartService $cartService)
    {
        $cartService->addItem(User::find(1), $request);

        return redirect()->back()-with("success", "insert sucessfuly");
    }

    public function deleted($id, CartService $cartService)
    {
        $cartService->removeItem($id);
        return redirect()->back()-with("success", "delete sucessfuly");
    }
}
