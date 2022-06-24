<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\userCart;
use App\Models\userCartVideo;
use App\Models\orders;
use App\Models\orderDetails;
use App\Models\orderShipping;
use App\Models\userAddress;
use App\Models\generalSettings;
use Auth;

class checkoutController extends Controller
{

    public function index(Request $request){
        $data = $request->all();

        if (empty($data['payment_method'])){
            return response()->json('Invalid Parameters', 500); 
        }
        $gs = generalSettings::first();
        $cart = userCart::where('user_id', Auth::id())->first();
        $o = new orders;
        $o->buyer_id = Auth::id();
        $o->no_of_dvd = $cart->no_of_dvd;
        $o->no_of_bluray = $cart->no_of_bluray;
        $o->disc_title = $cart->disc_title;
        $o->total_price = ($cart->no_of_bluray*$gs->bluray_price)+($cart->no_of_dvd*$gs->dvd_price);
        $o->status = '1';
        $o->save();
        $orderId = $o->id;

        foreach ($cart->videos as $key => $value) {
           $od = new orderDetails;
           $od->order_id = $orderId;
           $od->type = '1';
           $od->video_link =  $value->video_link;
           $od->save();
        }

        $add = userAddress::find($cart->address_id);

        $oadd = new orderShipping;
        $oadd->order_id = $orderId;
        $oadd->address_1 = $add->address_1;
        $oadd->address_2 = $add->address_2;
        $oadd->city = $add->city;
        $oadd->state = $add->state;
        $oadd->zipcode = $add->zipcode;
        $oadd->save();

        userCartVideo::where('cart_id', $cart->id)->delete();
        userCart::destroy($cart->id);

        return response()->json(['status' => 200, 'message' => 'Step Successfully Proccessed.', 'order_id' => $orderId]);
    }
}
