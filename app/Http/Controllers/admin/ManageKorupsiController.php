<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Form;

class ManageKorupsiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function showKorupsi(){
        $post = Form::all()->sortByDesc('created_at');

        return view('adminResources.manage-korupsi', compact('post'));
    }
}
