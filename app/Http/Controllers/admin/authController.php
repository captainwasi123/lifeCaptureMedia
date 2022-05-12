<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class authController extends Controller
{
    public function login(){

        return view('admin.login');
    }

    public function loginAttempt(Request $req){
        if (Auth::guard('admin')->attempt(['email' => $req->email, 'password' => $req->password])) {
            
            return redirect(route('admin.index'));
        }else{
            return redirect(route('admin.login'))->with('error', 'Authentication Error');
        }
    }

    public function logout(){
        Auth::guard('admin')->logout();

        return redirect(route('admin.login'))->with('success', 'Successfully Logout.');
    }
}
