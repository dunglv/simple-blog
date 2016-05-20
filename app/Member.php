<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'users';
    
    public function events()
    {
        return $this->hasMany('App\Event', 'id');
    }
}
