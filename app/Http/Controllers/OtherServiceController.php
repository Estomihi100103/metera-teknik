<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtherServiceController extends Controller
{
    public function calibration()
    {
        $title='Kalibrasi Flow Meter dan Alat Teknik Industri';

        return view('other_service.calibration', compact('title'));
    }
}
