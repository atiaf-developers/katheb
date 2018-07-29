<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductTranslation extends MyModel {

    protected $table = "products_translations";
    protected $fillable=['title','description'];

 

}
