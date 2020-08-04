<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
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

    private static $cloudinary_link = 'https://res.cloudinary.com/vernom/image/upload/';

    public function getThumbnailArrayAttribute()
    {
        if ($this->thumbnail == null || strlen($this->thumbnail) == 0) {
            return array('https://res.cloudinary.com/vernom/image/upload/v1596461891/perfume_project/noimages_aaqvrt.png');
        }
        $list_photos = array();
        $single_thumb = explode(',', $this->thumbnail);
        foreach ($single_thumb as $single) {
            if (strlen($single) > 0) {
                array_push($list_photos, self::$cloudinary_link . $single);
            }
        }
        return $list_photos;
    }

    public function getThumbnailsAttribute()
    {
        $thumbnail[] = explode(',', $this->thumbnail);
        foreach ($thumbnail as $thumbnailValue) {
            return $thumbnailValue;
        }
    }



    //https://res.cloudinary.com/vernom/image/upload/v1596216873/perfume_project/perfume/allure_homme_sport_eau_extreme_EDP_1_zrfwsf.jpg
    //https://res.cloudinary.com/vernom/image/upload/v1596216873/perfume_project/perfume/allure_homme_sport_eau_extreme_EDP_2_rpp195.jpg
    //https://res.cloudinary.com/vernom/image/upload/v1596216879/perfume_project/perfume/allure_homme_sport_eau_extreme_EDP_3_es3rd0.jpg


}
