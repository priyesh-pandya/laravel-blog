<?php
/**
* Post Repository
*/
namespace App\Repositories;

use App\Post;

class Posts 
{
	
	public function top()
	{
		return Post::take(2)->latest()->get();
	}
	 
} 
?>