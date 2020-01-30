<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = 'order_info';
    public $timestamps = false;

    public function user(){
        return $this->belongsto('App\User');
    }
}
