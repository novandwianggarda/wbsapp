<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin', ['except' => ['logout']]);
    }

    public function showLoginForm(){
        return view('adminResources.layouts.adminLogin');
    }

    public function login(Request $request){
        //validate
            $this->validate($request,[
                'username' => 'required',
                'password' => 'required',
            ]);
        //attempt to login
            if (Auth::guard('admin')->attempt(['username'=> $request->username, 'password'=> $request->password], $request->remember)){
                //if success
                return redirect()->intended(route('admin.dashboard'));
            }
        //if unseuccess
        return redirect()->back()->withInput($request->only('username', 'remember'));
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin');
    }
}
