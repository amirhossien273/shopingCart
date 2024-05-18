<?php

namespace App\Service\Product;

use App\Models\Product;
use App\Repository\Product\ProductRepositoryInterface;

class CheckQuntityProduct {

    private $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function handel($productId, $quntity): bool
    {
       $product = $this->productRepository->find($productId);

        if($product->quntity < $quntity)
            return false;

        return true;

    }
}