<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;


class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        $meta_title = "Metera Teknik Indonesia | Distributor Flow Meter dan Alat Teknik Industri";
        $meta_description = "Distributor FLow meter, Water Meter, Wire Mesh Stainles, Kobe, dan Alat Alat Teknik Sipil";
        $meta_keywords = "Flow Meter, Rota Meter, Gas Detector MSA, Water Meter, Wire Mesh Stainles, Kobe, Alat Teknik Sipil";
        return view('brand.index', compact('brands', 'meta_title', 'meta_description', 'meta_keywords'));
    }


    public function show(Brand $brand)
    {
        $meta_title = 'Distributor ' . $brand->meta_title;
        $meta_description = $brand->meta_description;
        $meta_keywords = "Flow Meter, Rota Meter, Gas Detector MSA";
        $isproducts = $brand->products;
        //ambil semua kategori
        $brands = Brand::withCount('products')->with('products')->get();

        return view('brand.show-brand', [
            'brand' => $brand,
            'meta_title' => $meta_title,
            'meta_description' => $meta_description,
            'meta_keywords' => $meta_keywords,
            'isproducts' => $isproducts,
            'brands' => $brands
        ]);
    }
}
