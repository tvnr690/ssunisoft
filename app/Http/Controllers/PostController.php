<?php

namespace App\Http\Controllers;


use App\Post;
use App\category;
use App\sub_category;
use App\Tag;
// use App\Auth;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $categories = category::all();
        // $posts = Post::all();
        // $sub_categories = sub_category::all();
        // $tags = Tag::all();

        // , compact('categories')
        return view('multiauth::post.index');
    }
    public function bloglist()
    {
        // $categories = category::all();
        // , compact('categories')
        return view('multiauth::post.bloglist');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = category::all();
        // $posts = Post::all();
        // $sub_categories = sub_category::all();
        // $tags = Tag::all();

        return view('multiauth::post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $post_title = $request->p_
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }


    public function fetch(Request $request)
    {
        // $post_title = $request->p_
    }
}
