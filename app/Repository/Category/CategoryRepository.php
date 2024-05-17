<?php

namespace App\Repository\Category;

use App\Models\Category;
use App\Repository\BaseRepository;
use Illuminate\Support\Collection;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{

   /**
    * CategoryRepository constructor.
    *
    * @param Category $model
    */
   public function __construct(Category $model)
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

   public function insert(array $CategoryDTO)
   {
      return $this->model->insert($CategoryDTO);
   }

}