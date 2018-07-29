<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\FrontController;
use Validator;
use App\Models\Service;


class ServicesController extends FrontController
{
    
    public function __construct() {
        parent::__construct();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
         $Services = Service::Join('services_translations','services.id','=','services_translations.service_id')
                                   ->where('services_translations.locale',$this->lang_code)
                                   ->where('services.active',true)
                                   ->orderBy('services.this_order')
                                   ->select("services.slug","services_translations.title")
                                   ->paginate($this->limit);
                                   
          $this->data['services'] =  $service;
          return $this->_view('videos.index');

        } catch (\Exception $e) {
            session()->flash('msg',_lang('app.error_is_occured_try_again_later'));
            return redirect()->back();
        }
    }

  

}
