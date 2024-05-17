<?php

namespace App\Repository\Category;

use Illuminate\Support\Collection;

interface CategoryRepositoryInterface 
{
   public function all(): Collection;

   public function insert(array $CategoryDTO);
}