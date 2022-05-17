<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function active(){

        return view('admin.users.active');
    }

    public function blocked(){

        return view('admin.users.blocked');
    }
}
