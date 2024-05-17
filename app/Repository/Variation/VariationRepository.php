<?php

namespace App\Repository\Variation;

use App\Models\Variation;
use App\Repository\BaseRepository;
use Illuminate\Support\Collection;

class VariationRepository extends BaseRepository implements VariationRepositoryInterface
{

   /**
    * VariationRepository constructor.
    *
    * @param Variation $model
    */
   public function __construct(Variation $model)
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

   public function insert(array $VariationDTO)
   {
      return $this->model->insert($VariationDTO);
   }

}