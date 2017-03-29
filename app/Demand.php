<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demand extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function company(){
        return $this->belongsTo('App\Company');
    }

    public function jobcategory(){
        return $this->belongsTo('App\JobCategory');
    }
}
