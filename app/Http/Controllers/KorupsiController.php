<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KorupsiController extends Controller
{
    public function laporKorupsi(){
        return view('lapor.lapor_korupsi');
    }
}
