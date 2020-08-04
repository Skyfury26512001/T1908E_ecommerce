<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    private static $cloudinary_link = 'https://res.cloudinary.com/dwarrion/image/upload/';
    public function groups()
    {
        return $this->belongsToMany(Group::class, 'product_group', 'product_id', 'group_id');
    }

    public function origin()
    {
        return $this->belongsTo(Origin::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function getFormatPriceAttribute()
    {
//        $formatPrice = Money::VND($this->price)->format();
//        return $formatPrice;
        $formatPrice = number_format($this->price, '0', '3', '.') . ' ₫';
        return $formatPrice;
    }

    public function getThumbnailsAttribute()
    {
        $thumbnail[] = explode(',', $this->thumbnail);
        foreach ($thumbnail as $thumbnailValue) {
            return $thumbnailValue;
        }
    public function getThumbnailArrayAttribute(){


        if ($this->thumbnail == null || strlen($this->thumbnail) == 0) {
            return array('https://thanhtra.com.vn/image/images/noimages.png');
        }
        $list_photos = array();
        $single_thumb = explode(',',$this->thumbnail);
        foreach ($single_thumb as $single) {
            if (strlen($single) > 0) {
                array_push($list_photos, self::$cloudinary_link . $single . '.png');
            }
        }
        return $list_photos;
    }

    public function getPhotoIdsAttribute()
    {
        if ($this->thumbnail == null || strlen($this->thumbnail) == 0) {
            return array();
        }
        $list_ids = array();
        $photos = explode(',', $this->thumbnail);
        foreach ($photos as $p) {
            if (strlen($p) > 0) {
                array_push($list_ids, $p);
            }
        }
        return $list_ids;
    }
    public function getImageSize600x600Attribute(){
        return 'https://res.cloudinary.com/dwarrion/image/upload/c_scale,h_600,w_600/'.$this->brand_thumbnail;
    }
}
