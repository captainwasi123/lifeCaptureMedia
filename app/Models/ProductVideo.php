<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;


class ProductVideo extends Model
{
    use HasFactory;
    protected $table='product_videos';
    public $timestamps= false;
    // protected $casts = [
    //     'created_at' => 'datetime:d-M-y',
    //     'updated_at' => 'datetime:d-M-y',
    //    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public static function addvideo($id, $attachment){

        $pv = new ProductVideo;
        $pv->product_id=$id;
        $pv->attachment=$attachment;
        $pv->save();

    }


}
