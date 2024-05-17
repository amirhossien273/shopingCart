<?php

namespace App\Http\Middleware;

use App\Service\Product\CheckStoreProduct;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckStoreProductMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, CheckStoreProduct $checkStoreProduct): Response
    {
        if($checkStoreProduct->handel(auth()->user()->id, $request->product_id))
           return $next($request);

        return redirect()->with("error", "error store product");
    }
}
