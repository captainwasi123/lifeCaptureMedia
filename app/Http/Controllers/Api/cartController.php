<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\userCart;
use App\Models\userCartVideo;
use App\Models\userAddress;
use Auth;

class cartController extends Controller
{
    public function step1(Request $request){
        $data = $request->all();

        if (empty($data['dvd']) || empty($data['bluray'])){
            return response()->json('Invalid Parameters', 500); 
        }

        $c = userCart::where('user_id', Auth::id())->first();
        if(empty($c->id)){
            $c = new userCart;
            $c->user_id = Auth::id();
        }
        $c->no_of_dvd = $data['dvd'];
        $c->no_of_bluray = $data['bluray'];
        $c->save();

        return response()->json(['status' => 200, 'message' => 'Step Successfully Proccessed.']);
    }

    public function step2(Request $request){
        $data = $request->all();

        if (empty($data['disc_title'])){
            return response()->json('Invalid Parameters', 500); 
        }

        $c = userCart::where('user_id', Auth::id())->first();
        if(empty($c->id)){
            $c = new userCart;
            $c->user_id = Auth::id();
        }
        $c->disc_title = $data['disc_title'];
        $c->save();

        return response()->json(['status' => 200, 'message' => 'Step Successfully Proccessed.']);
    }

    public function step3(Request $request){
        if (empty($request->video_files) || count($request->video_files) == 0){
            return response()->json('Invalid Parameters', 500); 
        } 

        $cart = userCart::where('user_id', Auth::id())->first();

        for ($i=0; $i < count($request->video_files); $i++) { 
            $video_source = Auth::id().date('dmyHis').'-'.$request->video_files[$i]->getClientOriginalName();
            $request->video_files[$i]->move(public_path('storage/videos/'),$video_source);

            $c = new userCartVideo;
            $c->cart_id = $cart->id;
            $c->video_link = 'public/storage/videos/' . $video_source;
            $c->save();
        }

        return response()->json(['status' => 200, 'message' => 'Step Successfully Proccessed.']);
    }

    public function step4(Request $request){
        $data = $request->all();

        if (empty($data['address_id'])){
            return response()->json('Invalid Parameters', 500); 
        }

        $c = userCart::where('user_id', Auth::id())->first();
        if(empty($c->id)){
            $c = new userCart;
            $c->user_id = Auth::id();
        }
        $c->address_id = $data['address_id'];
        $c->save();


        return response()->json(['status' => 200, 'message' => 'Step Successfully Proccessed.']);
    }
}
