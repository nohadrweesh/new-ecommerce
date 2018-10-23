<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //
    protected $table='cities';
    protected $fillable=['city_name_ar','city_name_en','country_id'];

    public function country(){
    	return $this->belongsTo('App\Model\Country','country_id','id');
    }
}
