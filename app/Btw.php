<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Btw extends Model
{
    //
    protected $table = 'btw';
    public $timestamps = false;

    public function products() {
        return $this->hasMany('App\Product');
    }
}
