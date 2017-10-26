<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class BlogController extends Controller
{
	//functions in controlelrs are called actions
    public function getIndex(){
    	//pull in 10 items
    	$posts = Post::paginate(5);
    	
    	return view('blog.index')-> withposts($posts);
    }

    public function getSingle($slug){ //the parameter is what it corresponds to what the parameter is in the route
    	//fetch tfron the database, based on slug
    	$post = Post::where('slug', '=', $slug) -> first(); // first means get the first one and not get cause get is a group

    	//return view and pass in the post
    	return view('blog.single') -> withPost($post);
    }
}
