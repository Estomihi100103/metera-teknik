<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class HomeController extends Controller
{
    public function home()
    {
        $categories = Category::latest()->take(5)->get();
        $products = Product::latest()->take(3)->get();
        $title = 'Distributor Flow Meter';
        return view('home')->with([
            'categories' => $categories,
            'products' => $products,
            'title' => $title  
        ]);
    }

    public function searchProduct(Request $request)
    {
        $query = $request->input('query');
        $products = Product::where('product_name', 'LIKE', "%$query%")
            ->orWhere('deskripsi', 'LIKE', "%$query%")
            ->get();
        $title = 'Search Product';
        return view('product.results-search', compact('products', 'title'));
    }

    public function autocomplete(Request $request)
    {
        $query = $request->input('query');
        $products = Product::where('product_name', 'LIKE', "%$query%")
            ->orWhere('deskripsi', 'LIKE', "%$query%")
            ->limit(10)
            ->get(['id', 'product_name', 'slug']);
        
        return response()->json($products);
    }




    public function contactUs()
    {
        $title = 'Metera Teknik Indonesia';
        return view('contactUs.index', compact('title'));
    }

}
