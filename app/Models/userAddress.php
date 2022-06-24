<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;

class userAddress extends Model
{
    use HasFactory;
    protected $table = 'tbl_user_addresses_info';
    public $timestamps = false;

    public static function addAddress(array $data){
        $a = new userAddress;
        $a->user_id = Auth::id();
        $a->address_1 = $data['address_1'];
        $a->address_2 = $data['address_2'];
        $a->city = $data['city'];
        $a->state = $data['state'];
        $a->zipcode = $data['zipcode'];
        $a->save();
    }
}
