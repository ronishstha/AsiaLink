<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobcategory extends Model
{
    public function  user(){
        return $this->belongsTo('App\User');
    }

    public function company(){
        return $this->belongsTo('App\Company');
    }

    public function demands(){
        return $this->hasMany('App\Demand');
    }
}
