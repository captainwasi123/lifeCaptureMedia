<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\userCartVideo;
use App\Models\userAddress;

class userCart extends Model
{
    use HasFactory;
    protected $table = 'tbl_user_cart_info';

    public function videos(){
        return $this->hasMany(userCartVideo::class, 'cart_id', 'id');
    }
    public function shipping(){
        return $this->belongsTo(userAddress::class, 'address_id');
    }
}
