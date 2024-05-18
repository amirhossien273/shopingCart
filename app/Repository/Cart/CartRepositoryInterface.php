<?php

namespace App\Repository\Cart;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface CartRepositoryInterface 
{
   public function all(): Collection;

   public function insert(array $CartDTO);

   public function findCartByUserIdIsOpen($userId);
   
}