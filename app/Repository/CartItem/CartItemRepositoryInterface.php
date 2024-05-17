<?php

namespace App\Repository\CartItem;

use Illuminate\Support\Collection;

interface CartItemRepositoryInterface 
{
   public function all(): Collection;

   public function insert(array $CartItemDTO);
}