<?php

namespace App\Http\Controllers\manage;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;

class CategoryController extends Controller
{
    public function index()
    {
         $categories = Category::all();

        // Store each category in Redis
        foreach ($categories as $category) {
            Redis::set('category:'.$category->id, $category->toJson());
        }
        // Retrieve all category keys from Redis
        $categoryKeys = Redis::keys('category:*');

        // Retrieve category data for each key
        $categories = [];
        foreach ($categoryKeys as $key) {
            
            $categoryId = str_replace('laravel_database_', '', $key);
            // dd($key);
            $categoryData = Redis::get($categoryId);
            $categories[] = json_decode($categoryData, true);
        }

        return response()->json($categories);
     }
}
