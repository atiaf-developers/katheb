<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends MyModel {

    protected $table = "activities";
    public static $sizes = array(
        's' => array('width' => 200, 'height' => 200),
        'm' => array('width' => 600, 'height' => 400),
    );

    private static function getAll() {
        $activities = Activity::Join('activities_translations', 'activities.id', '=', 'activities_translations.activity_id')
                ->where('activities_translations.locale', static::getLangCode())
                ->where('activities.active', true)
                ->orderBy('activities.this_order')
                ->select("activities.images", "activities_translations.title", "activities_translations.description", 'activities.slug');

        return $activities;
    }

    public static function getAllFrontHome() {
        $activities = static::getAll();
        $activities->limit(2);
        $activities = $activities->get();
        return static::transformCollection($activities, 'FrontHome');
    }

    public function translations() {
        return $this->hasMany(ActivityTranslation::class, 'activity_id');
    }

    public static function transform($item) {
        $transformer = new \stdClass();
        $transformer->id = $item->id;
        $transformer->title = $item->title;
        $transformer->description = $item->description;
        $activity_images = json_decode($item->images);
        foreach ($activity_images as $key => $value) {
            $activity_images[$key] = static::rmv_prefix($value);
        }
        $prefixed_array = preg_filter('/^/', url('public/uploads/activities') . '/m_', $activity_images);
        $transformer->images = $prefixed_array;

        return $transformer;
    }

    public static function transformFrontHome($item) {
        $transformer = new \stdClass();
        $transformer->slug = $item->slug;
        $transformer->title = str_limit($item->title, 50, '...');
        $transformer->description = str_limit($item->description, 100, '...');
        $activity_images = json_decode($item->images);
        $activity_image_without_prefix = static::rmv_prefix($activity_images[0]);
        $transformer->image = url('public/uploads/activities') . '/m_' . $activity_image_without_prefix;


        return $transformer;
    }

    public static function transformDetailes($item) {

        $transformer = new \stdClass();
        $transformer->slug = $item->slug;
        $transformer->title = $item->title;
        $transformer->description = $item->description;
        $activity_images = json_decode($item->images);
        foreach ($activity_images as $key => $value) {
            $activity_images[$key] = static::rmv_prefix($value);
        }
        $prefixed_array = preg_filter('/^/', url('public/uploads/activities') . '/m_', $activity_images);
        $transformer->images = $prefixed_array;


        return $transformer;
    }

    protected static function boot() {
        parent::boot();

        static::deleting(function($activity) {
            foreach ($activity->translations as $translation) {
                $translation->delete();
            }
        });

        static::deleted(function($activity) {
            $old_images = json_decode($activity->images);
            foreach ($old_images as $key => $value) {
                static::deleteUploaded('activities', $value);
            }
        });
    }

}
