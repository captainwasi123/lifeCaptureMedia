<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class userController extends Controller
{
    public function active(){
        $data['users'] = User::where('status', '1')->latest()->paginate(25);
        return view('admin.users.active')->with($data);
    }

    public function blocked(){
        $data['users'] = User::where('status', '2')->latest()->paginate(25);
        return view('admin.users.blocked')->with($data);
    }

    public function blockUser($id){
        $id = base64_decode($id);
        $u = User::find($id);
        $u->status = '2';
        $u->save();

        return redirect()->back()->with('success', 'User successfully blocked.');
    }

    public function activeUser($id){
        $id = base64_decode($id);
        $u = User::find($id);
        $u->status = '1';
        $u->save();

        return redirect()->back()->with('success', 'User successfully activated.');
    }
}
