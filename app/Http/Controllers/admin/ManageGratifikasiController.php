<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\FormGratifikasi;

class ManageGratifikasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function showGratifikasi(){
        $grat = FormGratifikasi::all()->sortByDesc('created_at');

        return view('adminResources.manage-gratifikasi', compact('grat'));
    }
}
