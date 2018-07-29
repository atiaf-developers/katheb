<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceTranslation extends MyModel {

    protected $table = "services_translations";
    protected $fillable=['title','description'];

 

}
