<?php

namespace App\Repository\CartItem;

use App\Models\CartItem;
use App\Repository\BaseRepository;
use Illuminate\Support\Collection;

class CartItemRepository extends BaseRepository implements CartItemRepositoryInterface
{

   /**
    * CartItemRepository constructor.
    *
    * @param CartItem $model
    */
   public function __construct(CartItem $model)
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

   public function insert(array $CartItemDTO)
   {
      return $this->model->insert($CartItemDTO);
   }

}