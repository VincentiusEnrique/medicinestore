<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function medicines()
    {
        return $this->hasMany('app\Medicine','category_id','id');
    }
    public $timestamps=false;
}
