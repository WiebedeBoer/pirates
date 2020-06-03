<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Governor extends Model
{
    //governors table
    protected $table = 'governors';
    protected $primaryKey = 'governor_id';
	
	//fk
    public function countries()
    {
        return $this->belongsTo('App\Country','country');
    }
	
    public function colonies()
    {
        return $this->belongsTo('App\Colony','colony');
    }
	
    public function palaces()
    {
        return $this->belongsTo('App\Town','palace');
    }
}
