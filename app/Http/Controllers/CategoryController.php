<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $title ="Supplier Flow Meter";
        return view('category.index', compact('categories', 'title'));
    }

    public function show(Category $category)
    {
        $title = 'Distributor ' . $category->name;
        //ambil produk yang memiliki kategori yang sama dengan kategori saat ini
        $isproducts = $category->products;
        //ambil semua kategori
        $categories = Category::withCount('products')->with('products')->get();

        return view('category.show_category', [
            'category' => $category,
            'title' => $title,
            'isproducts' => $isproducts,
            'categories' => $categories
        ]);
    }
}
