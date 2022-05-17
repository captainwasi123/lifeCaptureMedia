<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\userAddress;
use Auth;

class userController extends Controller
{
    public function allAddress(){
        $data = userAddress::where('user_id', Auth::id())->orderBy('id', 'desc')->get();


        if (count($data) == 0) {
            return response()->json('Data not found', 404); 
        }
        
        return response()->json(['address' => $data]);
    }

    public function addAddress(Request $request){
        $data = $request->all();

        if (empty($data['address_1']) || empty($data['address_2']) || empty($data['city']) || empty($data['state']) || empty($data['zipcode'])){
            return response()->json('Invalid Parameters', 500); 
        }

        userAddress::addAddress($data);
        return response()->json(['status' => 200, 'message' => 'Address Successfully Added.']);
    }
}
