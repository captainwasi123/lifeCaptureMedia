<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderShipping extends Model
{
    use HasFactory;
    protected $table = 'tbl_order_shipping_info';
    public $timestamps = false;
}
