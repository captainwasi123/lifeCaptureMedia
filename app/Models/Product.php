<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;

class Product extends Model
{
    use HasFactory;
    protected $guarded=[];

    protected $table = 'tbl_products_info';

    public static function addProduct(array $data){

        $p = new Product;
        $p->user_id=Auth::id();
        $p->video_title=$data['video_title'];
        $p->blu_ray=$data['blu_ray'];
        $p->dvd=$data['dvd'];
        $p->save();

        return $p;
    }



}
