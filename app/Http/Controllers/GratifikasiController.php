<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GratifikasiController extends Controller
{
    public function laporGratifikasi(){
        return view('lapor.lapor_gratifikasi');
    }
}
