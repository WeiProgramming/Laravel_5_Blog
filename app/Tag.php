<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function posts()
    {//(link to model, name of table(alphabetical), anme of current model, name of joining model _id)
    	return $this -> belongsToMany('App\Post','post_tag');
    }
}
