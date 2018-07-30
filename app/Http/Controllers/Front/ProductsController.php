<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\FrontController;
use Validator;
use App\Models\Product;


class ProductsController extends FrontController
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

         $products = Product::getAllFrontPagination();
         $this->data['products'] =  $products;
          return $this->_view('products.index');
        } catch (\Exception $e) {
            session()->flash('msg',_lang('app.error_is_occured_try_again_later'));
            return redirect()->back();
        }
    }

    public function show($slug)
    {
       try {
         $product = Product::getAllDetails(['slug' => $slug]);
         if (!$product) {
           return $this->_err404();
         }
         $this->data['product'] =  $product;
          return $this->_view('products.show');
        } catch (\Exception $e) {
            session()->flash('msg',_lang('app.error_is_occured_try_again_later'));
            return redirect()->back();
        }
    }

  

}
