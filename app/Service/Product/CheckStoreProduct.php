<?php

namespace App\Service\Product;

use App\Models\Product;
use App\Repository\Product\ProductRepositoryInterface;

class CheckStoreProduct {

    private $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function handel($userId, $productId): bool
    {
       $product = $this->productRepository->find($productId);

        if($product->store == 0)
            return false;

        return true;

    }
}