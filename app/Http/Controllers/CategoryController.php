<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Brand;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $brands = Brand::withCount('products')->with('products')->get();
        $meta_title = "Distributor Flow Meter";
        $meta_description = "Distributor Water Meter, Wire Mesh Stainles, Kobe, Alat Teknik Sipil";
        $meta_keywords = "Flow Meter, Rota Meter, Gas Detector MSA";
        return view('category.index', compact('categories', 'meta_title', 'meta_description', 'meta_keywords', 'brands'));
    }

    public function show(Category $category)
    {
        $meta_title = 'Distributor ' . $category->meta_title;
        $meta_description = $category->meta_description;
        $meta_keywords = "Flow Meter, Rota Meter, Gas Detector MSA";
        //ambil produk yang memiliki kategori yang sama dengan kategori saat ini
        $isproducts = $category->products;
        //ambil semua kategori
        $brands = Brand::withCount('products')->with('products')->get();

        return view('category.show_category', [
            'category' => $category,
            'meta_title' => $meta_title,
            'meta_description' => $meta_description,
            'meta_keywords' => $meta_keywords,
            'isproducts' => $isproducts,
            'brands' => $brands
        ]);
    }
}
