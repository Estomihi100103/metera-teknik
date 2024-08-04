<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get();

        $meta_title = 'Produk Metera Teknik Indonesia';
        $meta_description = 'Produk flow meter solar dan meteran air yang kami supplai beragam seperti halnya: flow meter digital, meteran air PDAM, meteran air digital, flow meter air dan jenis flow meter lainya';
        $meta_keywords = 'Flow Meter, Fill Rite, Strainer, Pompa Industri, Rocker, Alat Teknik Industri';
        return view('product.index2', compact('meta_title', 'products', 'meta_description', 'meta_keywords'));
    }


    public function show(Product $product)
    {
        $brands = Brand::withCount('products')->with('products')->get();
        $isproducts = Product::where('brand_id', $product->brand_id)->get();
        $meta_title = $product->meta_title;
        $meta_description = $product->meta_description;
        $meta_keywords = $product->meta_keywords;

        return view('product.show_product', [
            'product' => $product,
            'brands' => $brands,
            'isproducts' => $isproducts,
            'meta_title' => $meta_title,
            'meta_description' => $meta_description,
            'meta_keywords' => $meta_keywords
        ]);
    }
    public function searchCategory(Request $request)
    {
        $query = $request->get('query');
        $categories = Category::where('name', 'LIKE', "%{$query}%")->get();
        return response()->json($categories);
    }
}
