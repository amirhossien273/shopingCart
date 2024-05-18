<?php

namespace App\Repository\Cart;

use App\Models\Cart;
use App\Repository\BaseRepository;
use Illuminate\Support\Collection;

class CartRepository extends BaseRepository implements CartRepositoryInterface
{

   /**
    * CartRepository constructor.
    *
    * @param Cart $model
    */
   public function __construct(Cart $model)
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

   public function insert(array $CartDTO)
   {
      return $this->model->insert($CartDTO);
   }

   public function findCartByUserIdIsOpen($userId)
   {
     return $this->model->where('user_id', $userId)->where('status', "open")->first();
   }

}