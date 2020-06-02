<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colony extends Model
{
    //towns table
    protected $table = 'colonies';
    protected $primaryKey = 'colony_id';
	
	//fk
    public function countries()
    {
        return $this->belongsTo('App\Country','country');
    } 
	
	//towns
    public function towns()
    {
        return $this->hasMany('App\Town','colony');
    }	
	
}
