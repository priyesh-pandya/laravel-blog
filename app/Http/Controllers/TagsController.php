<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 

use App\Tag;

use view;

class TagsController extends Controller
{
    
	public function index(Tag $tag)
	{  
		$posts = $tag->posts;
		 //dd( $posts);
	 	return view('Posts.index',compact('posts')); 
	}

}
