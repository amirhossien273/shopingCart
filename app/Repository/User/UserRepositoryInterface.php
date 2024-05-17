<?php

namespace App\Repository\User;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface UserRepositoryInterface 
{
   public function all(): Collection;

   public function insert(array $UserDTO);
}