<?php

namespace App\Service\Cart;

use App\Models\Cart;
use App\Models\User;
use App\Repository\Cart\CartRepositoryInterface;
use App\Repository\CartItem\CartItemRepositoryInterface;

class CartService {

    private $cartRepository;
    private $cartItmeRepository;

    public function __construct(CartRepositoryInterface $cartRepository, CartItemRepositoryInterface $cartItemRepository)
    {
        $this->cartRepository = $cartRepository;
        $this->cartItmeRepository = $cartItemRepository;
    }

    public function generateCart(User $user)
    {
        if(!$this->checkCart($user))
           $this->createCart($user);
    }

    public function checkCart(User $user): bool
    {
        return true;
    }

    public function createCart(User $user)
    {

    }

    public function showCart($user)
    {
        
    }

    public function addItem(User $user, Cart $cart)
    {
        
    }

    public function removeItem(User $user, Cart $cart)
    {
        
    }
}