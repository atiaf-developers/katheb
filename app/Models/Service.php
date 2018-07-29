<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends MyModel {

    protected $table = "services";
    public static $sizes = array(
        's' => array('width' => 200, 'height' => 200),
        'm' => array('width' => 1000, 'height' => 800),
    );

    public function translations() {
        return $this->hasMany(ServiceTranslation::class, 'service_id');
    }

    protected static function boot() {
        parent::boot();

        static::deleting(function($service) {
            foreach ($service->translations as $translation) {
                $translation->delete();
            }
            static::deleteUploaded('services', $service->image);
        });
    }

    public static function transform($item) {
        $transformer = new \stdClass();
        $transformer->id = $item->id;
        $transformer->title = $item->title;
        $transformer->description = $item->description;
        $transformer->image = url('public/uploads/products') . '/m_' . static::rmv_prefix($item->image);

        return $transformer;
    }

    public static function transformHome($item) {
        $transformer = new \stdClass();
        $transformer->id = $item->id;
        $transformer->title = $item->title;
        $transformer->description = $item->description;
        $transformer->image = url('public/uploads/products') . '/m_' . static::rmv_prefix($item->image);

        return $transformer;
    }

}
