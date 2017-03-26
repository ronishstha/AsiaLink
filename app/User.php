<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;

class User extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{
    use Authenticatable;

    public function pages()
    {
        return $this->hasMany('App\Page');
    }

    public function banners()
    {
        return $this->hasMany('App\Banner');
    }

    public function reviews()
    {
        return $this->hasMany('App\Review');
    }

    public function clients()
    {
        return $this->hasMany('App\Client');
    }

    public function jobs()
    {
        return $this->hasMany('App\Job');
    }

    public function applications()
    {
        return $this->hasMany('App\Application');
    }
}