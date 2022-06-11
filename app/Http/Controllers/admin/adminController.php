<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\orders;
use App\Models\User;

class adminController extends Controller
{
    public function index(){
        $data = array(
            'total_orders' => orders::count(),
            'pending_orders' => orders::where('status', '1')->count(),
            'total_users' => User::count(),
            'active_users' => User::where('status', '1')->count(),
            'pending_orders_data' => orders::where('status', '1')->latest()->limit(10)->get()
        );
        return view('admin.index')->with($data);
    }
}
