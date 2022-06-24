<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\generalSettings;

class settingController extends Controller
{
    public function index(){
        $data = generalSettings::first();

        return view('admin.settings.index', ['data' => $data]);
    }

    public function update(Request $request){
        $data = $request->all();
        $gs = generalSettings::first();
        $gs->dvd_price = $data['dvd_price'];
        $gs->bluray_price = $data['bluray_price'];
        $gs->save();

        return redirect()->back()->with('success', 'General Settings Successfully Updated.');
    }
}
