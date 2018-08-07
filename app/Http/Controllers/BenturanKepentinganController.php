<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BenturanKepentinganController extends Controller
{
    public function laporBenturan(){
        return view('lapor.lapor_benturan');
    }
}
