<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function demands(){
        return $this->hasMany('App\Demands');
    }

    public function jobcategories(){
        return $this->hasMany('App\Jobcategories');
    }
}
