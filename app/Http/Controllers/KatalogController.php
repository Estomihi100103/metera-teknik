<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class KatalogController extends Controller
{
    public function index()
    {
        $title = 'Katalog Produk | Liquid Control, Flow Meter, Water Meter, Level Sensor, Transmitter';
        $pdfs = \App\Models\Pdf::latest()->get();
        $categories = Category::withCount('products')->with('products')->get();        
  
        return view('katalog.index', compact('title', 'pdfs', 'categories'));
    }


}
