<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends MyModel {

    protected $table = "videos";

    private static function getAll() {
        $videos = Video::Join('videos_translations', 'videos.id', '=', 'videos_translations.video_id')
                ->where('videos_translations.locale',static::getLangCode())
                ->where('videos.active', true)
                ->orderBy('videos.this_order')
                ->select("videos.id", "videos_translations.title", 'videos.url');

        return $videos;
    }

    public static function getOneFrontHome() {
        $videos = static::getAll();
       $videos= $videos->first();
        return static::transform($videos);
    }
    public function translations() {
        return $this->hasMany(VideoTranslation::class, 'video_id');
    }

    public static function transform($item) {
        $transformer = new \stdClass();

        $transformer->title = $item->title;
        $transformer->url = "https://www.youtube.com/embed" . "/" . $item->youtube_url;

        return $transformer;
    }

    protected static function boot() {
        parent::boot();

        static::deleting(function($video) {
            foreach ($video->translations as $translation) {
                $translation->delete();
            }
        });
    }

}
