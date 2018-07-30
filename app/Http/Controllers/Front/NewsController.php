<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\FrontController;
use Validator;
use App\Models\News;

class NewsController extends FrontController {

    public function __construct() {
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $this->data['news'] = News::getAllFrontPagination();
        return $this->_view('news.index');
    }

    public function show($slug) {
        try {
            $news = News::getOneFront($slug);

            if (!$news) {
                return $this->_err404();
            }

            $this->data['news'] = $news;
            return $this->_view('news.show');
        } catch (\Exception $e) {
            session()->flash('msg', _lang('app.error_is_occured_try_again_later'));
            return redirect()->back();
        }
    }

}
