<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends MyModel {

    protected $table = 'settings';
    protected $fillable=['name','value'];
    public static $sizes = array(
        's' => array('width' => 120, 'height' => 120),
        'm' => array('width' => 400, 'height' => 200),
    );
    public static function getAll() {
        $settings = static::get()->keyBy('name');
        $settings['social_media'] = json_decode($settings['social_media']->value);
        $settings['about_image'] = url('public/uploads/settings') . '/m_' . static::rmv_prefix($settings['about_image']->value);
        $settings['info'] = SettingTranslation::where('locale', static::getLangCode())->first();
        return $settings;
    }

    public static function transform($item) {
      
        
        return $item;

    }

}
