<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends MyModel {

    protected $table = "albums";
    public static $sizes = array(
        's' => array('width' => 200, 'height' => 200),
        'm' => array('width' => 1000, 'height' => 800),
    );

    public function translations() {
        return $this->hasMany(AlbumTranslation::class, 'album_id');
    }

    public function images() {
        return $this->hasMany(AlbumImage::class, 'album_id');
    }

    protected static function boot() {
        parent::boot();

        static::deleting(function($album) {
            foreach ($album->translations as $translation) {
                $translation->delete();
            }
            foreach ($album->images as $image) {
                $image->delete();
            }
        });
    }

    public static function transform($item) {
             $transformer = new \stdClass();
        $transformer->slug = $item->slug;
        $transformer->title = $item->title;
        $transformer->image = url('public/uploads/albums') . '/m_' . static::rmv_prefix($item->image);
        return $transformer;
    }

    public static function transformFront($item) {
        $transformer = new \stdClass();
        $transformer->slug = $item->slug;
        $transformer->title = $item->title;
        $transformer->image = url('public/uploads/albums') . '/m_' . static::rmv_prefix($item->image);
        return $transformer;
    }


}
