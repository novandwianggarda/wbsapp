<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\FormBenturan;

class ManageBenturanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function showBenturan(){
        $ben = FormBenturan::all()->sortByDesc('created_at');

        return view('adminResources.manage-benturan', compact('ben'));
    }
}
