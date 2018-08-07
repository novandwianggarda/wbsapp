<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;
use App\FormGratifikasi;
use App\FormBenturan;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Form::all();
        $grat = FormGratifikasi::all();
        $ben = FormBenturan::all();

        return view('adminResources.dashboard', compact('post', 'grat', 'ben'));
    }

    public function back(){
        return view('adminResources.layouts.adminLogin');
    }
}
