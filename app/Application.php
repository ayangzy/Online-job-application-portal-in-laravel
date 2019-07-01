<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    //

    protected $fillable = ['user_id', 'position', 'contact','phone','lga','state','identification_type', 'identification_name','profile_picture','nysc_number','nysc_year','secondary_year', 'secondary', 'tertiary', 'tertiary_year','upload_ssce','upload_nysc','upload_degree'];


    public function position(){
        return $this->belongsTo('App\user');
    }

    public function Application(){
        return $this->belongsTo('App\user');
    }
}
