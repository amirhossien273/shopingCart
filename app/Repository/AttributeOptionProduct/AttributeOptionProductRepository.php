<?php

namespace App\Repository\AttributeOptionProduct;

use App\Models\AttributeOptionProduct;
use App\Repository\BaseRepository;
use Illuminate\Support\Collection;

class AttributeOptionProductRepository extends BaseRepository implements AttributeOptionProductRepositoryInterface
{

   /**
    * AttributeOptionProductRepository constructor.
    *
    * @param AttributeOptionProduct $model
    */
   public function __construct(AttributeOptionProduct $model)
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

   public function insert(array $AttributeOptionProductDTO)
   {
      return $this->model->insert($AttributeOptionProductDTO);
   }

}