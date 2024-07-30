<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtherServiceController extends Controller
{
    public function calibration()
    {
        $meta_title = 'Kalibrasi Flow Meter dan Alat Teknik Industri';
        $meta_description = 'Metera Teknik Indonesia melayani jasa Kalibrasi Suhu, Kalibrasi masa, kalibrasi ph meter, kalibrasi alat-alat ukur dan alat teknik industri lainnya.';
        $meta_keywords = 'Kalibrasi Suhu, Kalibrasi masa, kalibrasi ph meter, kalibrasi alat kesehatan, kalibrasi alat-alat ukur, kalibrasi intrument analitik';
        return view('other_service.calibration', compact('meta_title', 'meta_description', 'meta_keywords'));
    }
}
