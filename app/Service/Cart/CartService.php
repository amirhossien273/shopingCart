<?php

namespace App\Service\Cart;

use App\Models\Cart;
use App\Models\User;
use App\Repository\Cart\CartRepositoryInterface;
use App\Repository\CartItem\CartItemRepositoryInterface;
use Illuminate\Http\Request;

class CartService {

    private $cartRepository;
    private $cartItmeRepository;

    public function __construct(CartRepositoryInterface $cartRepository, CartItemRepositoryInterface $cartItemRepository)
    {
        $this->cartRepository = $cartRepository;
        $this->cartItmeRepository = $cartItemRepository;
    }

    public function generateCart(User $user, $productId)
    {
        if(!$this->checkCart($user->id))
           $this->createCart($user);
    }

    public function checkCart($userId): bool
    {
        if($this->cartRepository->findCartByUserIdIsOpen($userId))
          return true;
        return false;
    }

    public function createCart(User $user)
    {
        $this->cartRepository->create([
            "user_id" => $user->id,
            "name"    => $user->name,
            "email"   => $user->email,
            "status" => "open"
        ]);
    }

    public function showCart($userId)
    {
       return $this->cartRepository->findCartByUserIdIsOpen($userId);
    }

    public function addItem(User $user, Request $request)
    {
        $cart = $this->showCart($user);
        return  $this->cartItmeRepository->create([
            "cart_id"    => $cart->id,
            "product_id" => $request->product_id,
            "quntity"    => $request->quntity
        ]);

    }

    public function removeItem($cartItemId)
    {
        $this->cartItmeRepository->delete($cartItemId);
    }
}