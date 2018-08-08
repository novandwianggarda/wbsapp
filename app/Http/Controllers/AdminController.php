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

        $post = Form::all()->sortByDesc('created_at');
        $grat = FormGratifikasi::all()->sortByDesc('created_at');
        $ben = FormBenturan::all()->sortByDesc('created_at');

        return view('adminResources.dashboard', compact('post', 'grat', 'ben'));
    }

    public function back(){
        return view('adminResources.layouts.adminLogin');
    }
}
