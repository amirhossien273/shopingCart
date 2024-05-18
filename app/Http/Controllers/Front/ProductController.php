<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Repository\Product\ProductRepositoryInterface;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(ProductRepositoryInterface $productRepository)
    {
        $products = $productRepository->all();
        return view('front.product.index', compact('products'));
    }

    public function show($id, ProductRepositoryInterface $productRepository)
    {
        $product = $productRepository->find($id);
        return view('front.product.show', compact('product'));
    }
}
