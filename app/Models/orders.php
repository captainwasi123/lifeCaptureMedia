<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\orderDetails;
use App\Models\orderShipping;
use App\Models\User;

class orders extends Model
{
    use HasFactory;
    protected $table = 'tbl_order_info';


    public function detail(){
        return $this->hasMany(orderDetails::class, 'order_id', 'id');
    }
    public function shipping(){
        return $this->belongsTo(orderShipping::class, 'id', 'order_id');
    }
    public function buyer(){
        return $this->belongsTo(User::class, 'buyer_id');
    }
}
