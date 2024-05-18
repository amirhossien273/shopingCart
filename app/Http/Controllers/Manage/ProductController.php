<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Http\Requests\Manage\Product\ProductStoreRequest;
use App\Service\Product\CreateProductService;

class ProductController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Manage\Product\ProductStoreRequest  $request
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function store(ProductStoreRequest $request, CreateProductService $createProduct) 
    {
        $createProduct->handel($request);
        return redirect()->back()->with("success", "insert successfully");
    }

    /**
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function create()
    {
        return view('manage.product.store');
    }
}
