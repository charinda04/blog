<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Blog;
use App\comments;

class CommentsController extends Controller
{
    // 
    public function store(Blog $blog){

    	
    		$post = new comments;
    		$post->body = Request('body'); 
    		$post->blog_id = $blog->id;

    		$post->save();
    	

    	return back();

    }

}
