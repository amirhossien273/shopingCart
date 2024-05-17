<?php

namespace App\Repository\VariationOptionProductItem;

use App\Models\VariationOptionProductItem;
use App\Repository\BaseRepository;
use Illuminate\Support\Collection;

class VariationOptionProductItemRepository extends BaseRepository implements VariationOptionProductItemRepositoryInterface
{

   /**
    * VariationOptionProductItemRepository constructor.
    *
    * @param VariationOptionProductItem $model
    */
   public function __construct(VariationOptionProductItem $model)
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

   public function insert(array $VariationOptionProductItemDTO)
   {
      return $this->model->insert($VariationOptionProductItemDTO);
   }

}