<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Origin extends Model
{
    public function products(){
        $this->hasMany(Product::class);
    }
}
