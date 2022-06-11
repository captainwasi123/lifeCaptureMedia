<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\orders;

class orderController extends Controller
{
    public function pending(){
        $data = array(
            'data' => orders::where('status', '1')->latest()->paginate(25)
        );

        return view('admin.orders.pending')->with($data);
    }

    public function delivered(){
        $data = array(
            'data' => orders::where('status', '2')->latest()->paginate(25)
        );

        return view('admin.orders.delivered')->with($data);
    }

    public function cancelled(){
        $data = array(
            'data' => orders::where('status', '3')->latest()->paginate(25)
        );

        return view('admin.orders.cancelled')->with($data);
    }

    public function cancelOrder($id){
        $id = base64_decode($id);

        $o = orders::find($id);
        $o->status = '3';
        $o->save();

        return redirect()->back()->with('success', 'Order successfully cancelled.');
    }

    public function deliverOrder($id){
        $id = base64_decode($id);

        $o = orders::find($id);
        $o->status = '2';
        $o->save();

        return redirect()->back()->with('success', 'Order successfully Completed.');
    }

    public function downloadMedia($id){
        $id = base64_decode($id);
        $data = orders::find($id);
        return view('admin.orders.response.download', ['data' => $data]);
    }
}
