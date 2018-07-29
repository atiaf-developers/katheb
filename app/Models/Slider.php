<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends MyModel {

    protected $table = "slider";

    public static $sizes = array(
        's' => array('width' => 120, 'height' => 120),
        'm' => array('width' => 400, 'height' => 400),
        'l' => array('width' => 1000, 'height' => 600),
    );
 

    public static function getAll($where_array = array()) {
        $slider = Slider::where('slider.active', true)
                ->orderBy('slider.this_order')
                ->select('image', 'url')
                ->get();
        
        return static::transformCollection($slider);
    }

    public static function transform($item) {
        $transformer = new \stdClass();
        $transformer->id = $item->id;
        $transformer->url = $item->url;
        $transformer->image = url('public/uploads/slider') . '/l_' . static::rmv_prefix($item->image);
        return $transformer;
    }

    protected static function boot() {
        parent::boot();

        static::deleting(function($slider) {

        });

        static::deleted(function($slider) {
            self::deleteUploaded('slider', $slider->image);
        });
    }

}
