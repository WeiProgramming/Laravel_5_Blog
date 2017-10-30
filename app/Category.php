<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories'; //tells laravel to use the categories table if model and table looks too out of convention

    //we will tell that category will have many posts one-to-many category is one with many posts

    public function posts(){
    	return $this->hasMany('App\Post'); //connects to the post model
    }
}
