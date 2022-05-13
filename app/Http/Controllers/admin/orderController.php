<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class orderController extends Controller
{
    public function pending(){

        return view('admin.orders.pending');
    }

    public function delivered(){

        return view('admin.orders.delivered');
    }

    public function cancelled(){

        return view('admin.orders.cancelled');
    }
}
