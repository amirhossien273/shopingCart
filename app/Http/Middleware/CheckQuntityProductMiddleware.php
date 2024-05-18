<?php

namespace App\Http\Middleware;

use App\Service\Product\CheckQuntityProduct;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckQuntityProductMiddleware
{

    private $checkStoreProduct;
    
    public function __construct(CheckQuntityProduct $checkStoreProduct)
    {
        $this->checkStoreProduct = $checkStoreProduct;  
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($this->checkStoreProduct->handel($request->product_id, $request->quntity))
           return $next($request);

        return redirect()->back()->with("error", "error store product");
    }
}
