<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    //
    protected $fillable = ['name'];

    public function lgas(){
        return $this->hasMany('App\Lga');
    }
}
