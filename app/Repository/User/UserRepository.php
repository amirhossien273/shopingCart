<?php

namespace App\Repository\User;

use App\Models\User;
use App\Repository\BaseRepository;
use Illuminate\Support\Collection;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{

   /**
    * UserRepository constructor.
    *
    * @param User $model
    */
   public function __construct(User $model)
   {
       parent::__construct($model);
   }

   /**
    * @return Collection
    */
   public function all(): Collection
   {
       return $this->model->all();    
   }

   public function insert(array $UserDTO)
   {
      return $this->model->insert($UserDTO);
   }

}