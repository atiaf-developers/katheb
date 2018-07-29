<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends MyModel {

    protected $table = "services";
    public static $sizes = array(
        's' => array('width' => 200, 'height' => 200),
        'm' => array('width' => 1000, 'height' => 800),
    );

   private static function getAll() {
        $services = static::Join('services_translations', 'services.id', '=', 'services_translations.service_id')
                ->where('services_translations.locale', static::getLangCode())
                ->where('services.active', true)
                ->orderBy('services.this_order')
                ->select("services.image", "services.slug", "services_translations.title", "services_translations.description");

        return $services;
    }

    public static function getAllFrontHome() {
        $services = static::getAll();
        $services->limit(3);
        $services=$services->get();
        return static::transformCollection($services);
    }

    public static function getAllFrontPagination() {
        $services = static::getAll();
        $services = $services->pginate(static::$limit);
        return static::transformCollection($services);
    }
    
    public static function getAllDetails($where_array) {
        $service = static::getAll();
        $service->where('id',$where_array['id']);
        $service = $service->first();
        return static::transform($service);
    }


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
        $transformer->slug = $item->slug;
        $transformer->title = $item->title;
        $transformer->description = $item->description;
        $transformer->image = url('public/uploads/services') . '/m_' . static::rmv_prefix($item->image);

        return $transformer;
    }

}
