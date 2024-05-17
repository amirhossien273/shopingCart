<?php

namespace App\Repository\Attribute;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface AttributeRepositoryInterface 
{
   public function all(): Collection;

   public function insert(array $articleDTO);
}