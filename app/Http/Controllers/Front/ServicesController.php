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

         $services = Service::getAllFrontPagination();
         $this->data['services'] =  $services;
          return $this->_view('services.index');
        } catch (\Exception $e) {
            session()->flash('msg',_lang('app.error_is_occured_try_again_later'));
            return redirect()->back();
        }
    }

    public function show($slug)
    {
       try {
         $service = Service::getAllDetails(['slug' => $slug]);
         if (!service) {
           return $this->_err404();
         }
         $this->data['service'] =  $service;
          return $this->_view('services.show');
        } catch (\Exception $e) {
            session()->flash('msg',_lang('app.error_is_occured_try_again_later'));
            return redirect()->back();
        }
    }

  

}
