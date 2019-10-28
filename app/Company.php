<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $primaryKey = 'owner_id';
    public $incrementing = false;
    protected $fillable = [
        'name', 'owner_id'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function cars(){
        return $this->hasMany('App\Car');
    }
}
