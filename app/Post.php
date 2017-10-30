<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	//matches back with category so they talk to eachother
    public function category()
    {
    	return $this->belongsTo('App\Category');
    }
}
