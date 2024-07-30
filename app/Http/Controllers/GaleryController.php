<?php

namespace App\Http\Controllers;
use App\Models\Galeri;

use Illuminate\Http\Request;

class GaleryController extends Controller
{
    //indes 
    public function index()
    {   
        $meta_title = 'Project | Liquid Control, Flow Meter, Water Meter';
        $meta_description = 'Project Liquid Control, Flow Meter, Water Meter';
        $meta_keywords = 'Project Liquid Control, Flow Meter, Water Meter';

        //ambil data dari Galery  berdasarkan yang terbaru
        $galeries = Galeri::latest()->get();
        
        return view('galeri.index' , compact('galeries', 'meta_title', 'meta_description', 'meta_keywords'));
    }
}
