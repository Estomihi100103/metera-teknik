<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;

class HomeController extends Controller
{
    public function home()
    {
        $brands = Brand::latest()->take(5)->get();
        $products = Product::latest()->take(3)->get();
        $meta_title = 'Distributor Flow Meter dan Alat Teknik Industri di Indonesia';
        $meta_description = 'Metera Teknik Indonesia adalah Distributor Flow Meter dan Alat Alat Teknik Industri di Indonesia';
        $meta_keywords = 'Flow Meter, Alat Teknik Industri';
        return view('home')->with([
            'brands' => $brands,
            'products' => $products,
            'meta_title' => $meta_title,
            'meta_description' => $meta_description,
            'meta_keywords' => $meta_keywords
        ]);
    }

    public function searchProduct(Request $request)
    {
        $query = $request->input('query');
        $products = Product::where('product_name', 'LIKE', "%$query%")
            ->orWhere('deskripsi', 'LIKE', "%$query%")
            ->get();
        $meta_title = 'Search Product';
        $meta_description = 'Carilah produk yang dibutuhkan oleh perusahaan Anda.'; 
        $meta_keywords = 'Search Product';
        return view('product.results-search', compact('products', 'meta_title', 'meta_description', 'meta_keywords'));
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
        $meta_title = 'Kontak Metera Teknik Indonesia';
        $meta_description = 'Kontak kami untuk informasi lebih lanjut.';
        $meta_keywords = 'Kontak Metera Teknik Indonesia, Kontak Metera Teknik';

        return view('contactUs.index', compact('meta_title', 'meta_description', 'meta_keywords'));
    }
}
