<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userCartVideo extends Model
{
    use HasFactory;
    protected $table = 'tbl_user_cart_videos_info';
    public $timestamps = false;
}
