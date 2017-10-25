<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
    	$post = new Post();
    	$post->post=$request->post;
    	$post->save();
    	return back();
    }

    public function like(Request $request)
    {
    	$post= Post::find($request->postId);
    	$likesVal=$request->likes;
    	$likesVal++;
    	$post->likes=$likesVal;
    	$post->save();
    	return back();
    }

    public function dislike(Request $request)
    {
    	$post= Post::find($request->postId);
    	$dislikesVal=$request->dislikes;
    	$dislikesVal--;
    	$post->dislikes=$dislikesVal;
    	$post->save();
    	return back();
    }

}
