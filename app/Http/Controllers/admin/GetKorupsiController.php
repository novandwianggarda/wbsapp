<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Form;
use App\FormGratifikasi;
use App\FormBenturan;

class GetKorupsiController extends Controller
{
    public function index(){
        $post = Form::all();
        $grat = FormGratifikasi::all();
        $ben = FormBenturan::all();

        return view('adminResources.dashboard', compact('post', 'grat', 'ben'));
    }
}
