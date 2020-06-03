<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //countries table
    protected $table = 'countries';
    protected $primaryKey = 'country_id';
	
	//towns
    public function towns()
    {
        return $this->hasMany('App\Town','country');
    }	

	//colonies
    public function colonies()
    {
        return $this->hasMany('App\Colony','country');
    }

	//governors
    public function governors()
    {
        return $this->hasMany('App\Governor','country');
    }		
	
}
