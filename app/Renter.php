<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Renter extends Model
{
    //
    protected $primaryKey = 'renter_id';
    public $incrementing = false;
    protected $fillable = [
        'name', 'renter_id'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function reservations(){
        return $this->hasMany('App\Reservation');
    }
}
