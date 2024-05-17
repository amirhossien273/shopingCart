<?php

namespace App\Service\Product;

use App\Events\CreateNewProduct;
use App\Http\Requests\Manage\Product\ProductStoreRequest;
use App\Repository\Product\ProductRepositoryInterface;

class CreateProductService {

    private $productRepository;

     /**
     *
     * @return void
     */
    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Manage\Product\ProductStoreRequest  $request
     * @return 
     */
    public function handel(ProductStoreRequest $request)
    {
      $products = $this->productRepository->create([
        'title'       => $request->title,
        'description' => $request->description,
        'price'       => $request->price,
        'quntity'     => $request->quntity,
        'category_id' => $request->category_id,
      ]);

      // event(new CreateNewProduct());

      return $products;
    }
}