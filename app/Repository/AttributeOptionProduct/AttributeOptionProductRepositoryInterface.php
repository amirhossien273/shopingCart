<?php

namespace App\Repository\AttributeOptionProduct;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface AttributeOptionProductRepositoryInterface 
{
   public function all(): Collection;

   public function insert(array $articleDTO);
}