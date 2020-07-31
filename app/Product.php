<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function groups(){
        return $this->belongsToMany(Group::class,'product_group','product_id','group_id');
    }
    public function origin(){
        return $this->belongsTo(Origin::class);
    }
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
    public function getFormattedPriceAttribute(){
        return "Giá sản phẩm này là : "  . number_format($this->price,'0','3','.') .'VND';

    }
}
