<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    //towns table
    protected $table = 'towns';
    protected $primaryKey = 'town_id';
	
	//fk
    public function countries()
    {
        return $this->belongsTo('App\Country','country');
    } 
	
    public function colonies()
    {
        return $this->belongsTo('App\Colony','colony');
    } 
	
	//governors
    public function governors()
    {
        return $this->hasMany('App\Governor','palace');
    }		
	
}
