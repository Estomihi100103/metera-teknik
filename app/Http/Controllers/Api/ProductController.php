<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductCollection;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ProductController extends Controller
{


    public function index(Request $request)
    {
        $cacheKey = 'products_' . md5($request->fullUrl());

        return Cache::remember($cacheKey, now()->addMinutes(10), function () use ($request) {
            $query = Product::query();

            if ($request->has('search')) {
                $searchTerm = $request->search;
                $query->where('product_name', 'LIKE', "%{$searchTerm}%");
            }

            $products = $query->get();
            return new ProductCollection($products);
        });
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        return new ProductResource($product);
    }
}
