<?php

namespace App\Repository\VariationOption;

use App\Models\VariationOption;
use App\Repository\BaseRepository;
use Illuminate\Support\Collection;

class VariationOptionRepository extends BaseRepository implements VariationOptionRepositoryInterface
{

   /**
    * VariationOptionRepository constructor.
    *
    * @param VariationOption $model
    */
   public function __construct(VariationOption $model)
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

   public function insert(array $VariationOptionDTO)
   {
      return $this->model->insert($VariationOptionDTO);
   }

}