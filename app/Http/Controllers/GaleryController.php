<?php

namespace App\Http\Controllers;
use App\Models\Galeri;

use Illuminate\Http\Request;

class GaleryController extends Controller
{
    //indes 
    public function index()
    {   
        $title = 'Project | Liquid Control, Flow Meter, Water Meter';
        //ambil data dari Galery  berdasarkan yang terbaru
        $galeries = Galeri::latest()->get();
        
        return view('galeri.index' , compact('galeries', 'title'));
    }
}
