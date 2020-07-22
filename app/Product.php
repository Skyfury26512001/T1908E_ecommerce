<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function groups(){
        $this->belongsToMany(Group::class);
    }
    public function origin(){
        $this->belongsTo(Origin::class);
    }
    public function brand(){
        $this->belongsTo(Brand::class);
    }
}
