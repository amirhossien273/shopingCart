<?php

namespace App\Repository\Variation;

use Illuminate\Support\Collection;

interface VariationRepositoryInterface 
{
   public function all(): Collection;

   public function insert(array $VariationDTO);
}