<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\orderDetails;
use App\Models\orderShipping;

class orders extends Model
{
    use HasFactory;
    protected $table = 'tbl_order_info';


    public function detail(){
        return $this->belongsTo(orderDetails::class, 'id', 'order_id');
    }
    public function shipping(){
        return $this->belongsTo(orderShipping::class, 'id', 'order_id');
    }
}
