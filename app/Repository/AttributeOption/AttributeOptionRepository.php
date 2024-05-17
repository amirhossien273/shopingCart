<?php

namespace App\Repository\AttributeOption;

use App\Models\AttributeOption;
use App\Repository\BaseRepository;
use Illuminate\Support\Collection;

class AttributeOptionRepository extends BaseRepository implements AttributeOptionRepositoryInterface
{

   /**
    * ArticleRepository constructor.
    *
    * @param AttributeOption $model
    */
   public function __construct(AttributeOption $model)
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