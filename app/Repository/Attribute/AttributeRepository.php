<?php

namespace App\Repository\Attribute;

use App\Models\Attribute;
use App\Repository\BaseRepository;
use Illuminate\Database\Eloquent\Modl;
use Illuminate\Support\Collection;

class AttributeRepository extends BaseRepository implements AttributeRepositoryInterface
{

   /**
    * AttributeRepository constructor.
    *
    * @param Attribute $model
    */
   public function __construct(Attribute $model)
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

   public function insert(array $articleDTO)
   {
      return $this->model->insert($articleDTO);
   }

}