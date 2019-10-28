<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //
    public function company(){
        return $this->belongsTo('App\Company');
    }

    public function reservations(){
        return $this->hasMany('App\Reservation');
    }
}
