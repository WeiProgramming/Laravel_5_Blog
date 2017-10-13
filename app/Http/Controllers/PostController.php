<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/posts/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the data, if fail jumps back to create with errors
        $this->validate($request, array(
                'title'         => 'required|max:255',
                'body'          => 'required'
            ));
        //store in the datbase
        //called new post cause that's the name of the model we created
        $post = new Post;
        $post -> title = $request -> title;
        $post -> body = $request -> body;

        $post -> save();

        Session::flash('success','The Blog Post was Successfully Saved!');//only let it exist for one request (key,value_), more permanent use put instead of flash

        //redirect to another page

        return redirect() -> route('posts.show',$post -> id); //this will dynaically have an id off post
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id); //helper method, eloquent to make it easy to play with the database
        return view('posts.show') -> with('post',$post); //passing in the variable to post
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
