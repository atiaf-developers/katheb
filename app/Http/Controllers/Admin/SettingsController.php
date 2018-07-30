<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\BackendController;
use App\Models\Setting;
use App\Models\SettingTranslation;
use DB;

class SettingsController extends BackendController {

    private $rules = array(
        'setting.email' => 'required|email',
        'setting.phone' => 'required',
        'setting.lat' => 'required',
        'setting.lng' => 'required',
        'setting.social_media.facebook' => 'required',
        'setting.social_media.twitter' => 'required',
        'setting.social_media.instagram' => 'required',
        'setting.social_media.google' => 'required',
        'setting.social_media.youtube' => 'required',
    );

    public function index() {

        $this->data['settings'] = Setting::get()->keyBy('name');

        if ($this->data['settings']) {
            $this->data['settings']['social_media'] = json_decode($this->data['settings']['social_media']->value);
            $this->data['settings']['store'] = json_decode($this->data['settings']['store']->value);
        }

        $this->data['settings_translations'] = SettingTranslation::get()->keyBy('locale');
        return $this->_view('settings/index', 'backend');
    }

    public function store(Request $request) {

        $columns_arr = array(
            'title' => 'required',
            'about' => 'required',
            'description' => 'required',
            'address' => 'required',
        );

        $this->rules = array_merge($this->rules, $this->lang_rules($columns_arr));
        $validator = Validator::make($request->all(), $this->rules);

        if ($validator->fails()) {
            $errors = $validator->errors()->toArray();
            return _json('error', $errors);
        } else {

            DB::beginTransaction();
            try {
                $setting = $request->input('setting');
                $setting_upload = $request->file('setting');
                

                $settings = Setting::get()->keyBy('name');
                $setting = $request->input('setting');

                $data_update = [];


                foreach ($setting as $key => $value) {
                    if ($key == 'social_media') {
                        $value = json_encode($value);
                    }
                    
                    
                    $data_update['value'][] = [
                        'value' => $value,
                        'cond' => [['name', '=', "'$key'"]],
                    ];
                }
                if ($setting_upload) {
                    foreach ($setting_upload as $key => $value) {
                        $value = Setting::upload($value, 'settings', true);
                        
                        $data_update['value'][] = [
                            'value' => $value,
                            'cond' => [['name', '=', "'$key'"]],
                        ];
                    }
                }
                

                $this->updateValues2('\App\Models\Setting', $data_update, true);


                // $album->image = Album::upload($request->file('image'), 'albums', true);

                $description = $request->input('description');
                $address = $request->input('address');
                $about = $request->input('about');
                $title = $request->input('title');
                foreach ($title as $key => $value) {
                    SettingTranslation::updateOrCreate(
                        ['locale' => $key], [
                            'locale' => $key, 'title' => $value, 'description' => $description[$key],
                            'address' => $address[$key], 'about' => $about[$key]
                        ]);
                }
                DB::commit();
                return _json('success', _lang('app.updated_successfully'));
            } catch (\Exception $ex) {
                DB::rollback();
                dd($ex);
                return _json('error', _lang('app.error_is_occured'), 400);
            }
        }
    }

}
