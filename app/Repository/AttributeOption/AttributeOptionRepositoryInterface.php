<?php

namespace App\Repository\AttributeOption;

use Illuminate\Support\Collection;

interface AttributeOptionRepositoryInterface 
{
   public function all(): Collection;

   public function insert(array $articleDTO);
}