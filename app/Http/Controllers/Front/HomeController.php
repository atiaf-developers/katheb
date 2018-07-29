<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\FrontController;
use App\Models\News;
use App\Models\Slider;
use App\Models\Album;
use App\Models\Activity;
use App\Models\Video;
use App\Models\ContactMessage;

class HomeController extends FrontController {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->data['news'] = News::getAllFrontHome();
        $this->data['activities'] = Activity::getAllFrontHome();
        $this->data['albums'] = Album::getAllFrontHome();
        $this->data['video'] = Video::getOneFrontHome();
        $this->data['slider'] = Slider::getAll();

        return $this->_view('index');
    }


}
