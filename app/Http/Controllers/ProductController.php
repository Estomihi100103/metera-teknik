<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->latest()->get();
        $title = 'Produk | Liquid Control, Flow Meter, Water Meter, Level Sensor, Transmitter';
        return view('product.index', compact('products', 'title'));
    }

    public function show(Product $product)
    {
        // Ambil seluruh data category dari database
        $categories = Category::withCount('products')->with('products')->get();
        //Ambil semua produk yang memiliki kategori yang sama dengan produk saat ini  kecuali produk saat ini
        $isproducts = Product::where('category_id', $product->category_id)->get();

        //ambil nama produk dari produk yang di show sekarang
        $title = $product->product_name;

        return view('product.show_product', [
            'product' => $product,
            'categories' => $categories,
            'isproducts' => $isproducts,
            'title' => $title
        ]);
    }

    public function searchCategory(Request $request)
    {
        $query = $request->get('query');
        $categories = Category::where('name', 'LIKE', "%{$query}%")->get();
        return response()->json($categories);
    }


}
