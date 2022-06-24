<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\orders;
use Auth;

class orderController extends Controller
{
    public function pending(){
        $data = orders::where('buyer_id', Auth::id())
                        ->where('status', '1')
                        ->with('detail', 'shipping')
                        ->latest()
                        ->get();
        if (count($data) == 0) {
            return response()->json('Data not found', 404); 
        }

        return response()->json(['orders' => $data]);
    }

    public function completed(){
        $data = orders::where('buyer_id', Auth::id())
                        ->where('status', '2')
                        ->with('detail', 'shipping')
                        ->latest()
                        ->get();
        if (count($data) == 0) {
            return response()->json('Data not found', 404); 
        }

        return response()->json(['orders' => $data]);
    }
}
