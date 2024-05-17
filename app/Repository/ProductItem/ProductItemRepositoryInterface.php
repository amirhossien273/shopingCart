<?php

namespace App\Repository\ProductItem;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface ProductItemRepositoryInterface 
{
   public function all(): Collection;

   public function insert(array $ProductItemDTO);
}