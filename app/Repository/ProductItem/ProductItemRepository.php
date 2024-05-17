<?php

namespace App\Repository\ProductItem;

use App\Models\ProductItem;
use App\Repository\BaseRepository;
use Illuminate\Support\Collection;

class ProductItemRepository extends BaseRepository implements ProductItemRepositoryInterface
{

   /**
    * ProductItemRepository constructor.
    *
    * @param ProductItem $model
    */
   public function __construct(ProductItem $model)
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

   public function insert(array $ProductItemDTO)
   {
      return $this->model->insert($ProductItemDTO);
   }

}