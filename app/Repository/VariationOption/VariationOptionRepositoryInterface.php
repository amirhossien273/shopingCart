<?php

namespace App\Repository\VariationOption;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface VariationOptionRepositoryInterface 
{
   public function all(): Collection;

   public function insert(array $VariationOptionDTO);
}