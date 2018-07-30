<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends MyModel {

    protected $table = "albums";
    public static $sizes = array(
        's' => array('width' => 200, 'height' => 200),
        'm' => array('width' => 1000, 'height' => 800),
    );

    private static function getAll() {
        $albums = Album::Join('albums_translations', 'albums.id', '=', 'albums_translations.album_id')
                ->where('albums_translations.locale', static::getLangCode())
                ->where('albums.active', true)
                ->orderBy('albums.this_order')
                ->select("albums.id", "albums_translations.title",'albums.image', 'albums.slug');

        return $albums;
    }

    public static function getAllFrontHome() {
        $albums = static::getAll();
        $albums->limit(8);
        $albums=$albums->get();
        return static::transformCollection($albums, 'FrontHome');
    }

    public static function getAllFrontPagination() {
        $albums = static::getAll();
        $albums = $albums->paginate(static::$limit);
        $albums->getCollection()->transform(function($album) {
            return static::transform($album);
        });
        return $albums;
    }


    public function translations() {
        return $this->hasMany(AlbumTranslation::class, 'album_id');
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

    public static function transformFrontHome($item) {
        $transformer = new \stdClass();
        $transformer->slug = $item->slug;
        $transformer->title = $item->title;
        $transformer->image = url('public/uploads/albums') . '/m_' . static::rmv_prefix($item->image);
        return $transformer;
    }


}
