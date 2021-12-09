<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Support\Facades\Validator;
use App\Models\ProductVideo;
use File;
use Auth;
class ProductController extends Controller
{

    public function __construct()
	{
	    $this->middleware('auth:sanctum');
    }


    public function index()
    {
        //
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'video_title' => 'required',
            'product_images' => 'required',
    ]);

    if ($validator->fails()) {
         return response()->json([
            'success' => false,
            'errors' => $validator->errors()
         ]);
    }


        $product_images =[];
        for ($i=0; $i < count($request->product_images); $i++) { 
          $product_image = date('dmyHis').'.'.$request->product_images[$i]->getClientOriginalName();
          $request->product_images[$i]->move(public_path('uploads/videos/'),$product_image);
    
             $product_images[] = asset('uploads/product_images/' . $product_image);
        }
        // $arr = [
        //     'product_images' => $product_images,
          
        // ];
       
        // return json_encode($arr);


          
            // $attachments = $request->file('attachment');
            $arr = [
                'user_id'=>Auth::id(),
                'video_title'=>$request->video_title,
                'blu_ray'=>$request->blu_ray,
                'dvd'=>$request->dvd,
            ];

         $p = Product::addProduct($arr);
            //dd($id);
        foreach ($product_images as $key => $value) {
            ProductVideo::addvideo($p->id, $value);
        }
        
      





        //  $images = asset('uploads/attachments/no-img.png');

        // $images=$request->file('attachment');

        // if($request->hasfile('attachment'))
        // {
        //     foreach($images as $image)
        //     {
        //         $filename = rand().'.'.$image->getClientOriginalExtension();
        //         echo json_encode($filename);
        //         $filename = $id.'-'.$filename;
        //         $image->storeAs(public_path('/uploads/videos/'), $filename);
        //         ProductVideo::addvideo($id, $filename);

        //     }
        // }

        

            list($status,$data) = $p ? [ true , Product::find($p->id) ] : [ false , ''];
            return ['success' => $status,'data' => $data];
    }


    public function show($id)
    {
        return Product::find($id);

    }


    public function update(Request $request, Product $product)
    {
        //
    }


    public function destroy(Product $product)
    {
        //
    }
}
