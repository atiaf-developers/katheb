<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\FrontController;
use Validator;
use App\Models\Activity;

class ActivitiesController extends FrontController {

    public function __construct() {
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $this->data['activities'] = Activity::getAllFrontPagination();
        return $this->_view('activities.index');
    }

    public function show($slug) {
        try {
            $activity = Activity::Join('activities_translations', 'activities.id', '=', 'activities_translations.activity_id')
                    ->where('activities_translations.locale', $this->lang_code)
                    ->where('activities.active', true)
                    ->where('activities.slug', $slug)
                    ->orderBy('activities.this_order')
                    ->select("activities.images", "activities_translations.title", "activities_translations.description", 'activities.slug')
                    ->first();

            if (!$activity) {
                return $this->_err404();
            }

            $this->data['activity'] = Activity::transformDetailes($activity);
            return $this->_view('activities.show');
        } catch (\Exception $e) {
            session()->flash('msg', _lang('app.error_is_occured_try_again_later'));
            return redirect()->back();
        }
    }

}
