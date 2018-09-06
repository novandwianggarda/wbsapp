<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WbsController extends Controller
{
    public function index(){
        return view('index');
    }

    public function home(){
        return view('home');
    }
    public function gratifikasi(){
        return view('gratifikasi');
    }
    public function benturan(){
        return view('benturan');
    }
}
