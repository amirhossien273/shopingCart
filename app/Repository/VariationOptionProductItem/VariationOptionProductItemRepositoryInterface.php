<?php

namespace App\Repository\VariationOptionProductItem;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface VariationOptionProductItemRepositoryInterface 
{
   public function all(): Collection;

   public function insert(array $VariationOptionProductItemDTO);
}