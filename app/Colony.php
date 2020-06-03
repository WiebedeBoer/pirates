<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colony extends Model
{
    //colonies table
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
	
	//governors
    public function governors()
    {
        return $this->hasMany('App\Governor','colony');
    }	
	
}
