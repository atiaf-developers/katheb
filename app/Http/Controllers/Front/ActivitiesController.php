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
            $activity = Activity::getOneFront($slug);

            if (!$activity) {
                return $this->_err404();
            }

            $this->data['activity'] = $activity;
            return $this->_view('activities.show');
        } catch (\Exception $e) {
            session()->flash('msg', _lang('app.error_is_occured_try_again_later'));
            return redirect()->back();
        }
    }

}
