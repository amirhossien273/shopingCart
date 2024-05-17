<?php

namespace App\Repository\Product;

use Illuminate\Support\Collection;

interface ProductRepositoryInterface 
{
   public function all(): Collection;

   public function insert(array $ProductDTO);
}