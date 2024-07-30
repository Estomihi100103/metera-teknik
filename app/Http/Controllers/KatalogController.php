<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class KatalogController extends Controller
{
    public function index()
    {
        $meta_title = 'Katalog Flow Meter';
        $meta_description = 'Katalog Flow Meter dan Alat Teknik Industri';
        $meta_keywords = 'Flow Meter, Alat Teknik Industri';
        $pdfs = \App\Models\Pdf::latest()->get();
        $categories = Category::withCount('products')->with('products')->get();

        return view('katalog.index', compact('pdfs', 'categories', 'meta_title', 'meta_description', 'meta_keywords'));
    }
}
