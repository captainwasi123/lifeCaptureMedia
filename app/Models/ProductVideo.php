<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;


class ProductVideo extends Model
{
    use HasFactory;
    protected $table = 'tbl_product_videos_info';
    public $timestamps= false;

    public static function addvideo($id, $attachment){
        $pv = new ProductVideo;
        $pv->product_id=$id;
        $pv->attachment=$attachment;
        $pv->save();
    }

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
