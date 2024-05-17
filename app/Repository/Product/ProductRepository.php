<?php

namespace App\Repository\Product;

use App\Models\Product;
use App\Repository\BaseRepository;
use Illuminate\Support\Collection;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{

   /**
    * ProductRepository constructor.
    *
    * @param Product $model
    */
   public function __construct(Product $model)
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

   public function insert(array $ProductDTO)
   {
      return $this->model->insert($ProductDTO);
   }

}