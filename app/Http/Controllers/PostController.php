<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //get all posts from the database
        $posts = Post::all();
        //return a json reponse to an api request with the posts data
        return response()->json([
            'message' => 'Posts retrieved successfully',
            'posts' => $posts
        ]);
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //store the post in the database usig create method
        Post::create([
            'title' => $request->title,
            'content' => $request->content
        ]);
        //return a json reponse to an api request with the post data
        return response()->json([
            'message' => 'Post created successfully',
            'post' => $request->all()
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}