<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;

use Carbon\Carbon;

use Illuminate\Support\Facades\DB;
//use App\User;

class PostsController extends Controller
{
    public function __construct()
    { 
        $this->middleware('auth')->except(['index','show']);
    }

   public function index()
    {    	 
    	$posts = (new \App\Repositories\Posts)->top(); 
         
        //$archives = App\Post::archives();

        if(auth()->check())
        { 
           $posts = App\Post::latest()
                    ->filter(request(['month','year']))
                    ->get(); 

             return view('Posts/index',compact('posts'));
        }
    	 
         return view('Posts/index',compact('posts'));
    }

    public function show(App\Post $post)
    {  
    	return view('Posts/show',compact('post'));
    }

    public function create()
    {
    	 return view('Posts/create');
    }

    public function edit($id)
    {
        $post = App\Posts::find($id);
        
        return view('Posts/edit', compact('post','id'));
    }

    public function destroy($id)
    {        
        $user = App\Post::find($id);

        $user->delete(); 

        session()->flash('message','Post has been destroyed');
        
        return redirect('/'); 
    }


    public function store()
    {   
        
        $this->validate(request(), [
				'title' => 'required',
    			'body' => 'required'
    		]); 
    	 

    	$post = App\Post::create(
    		[
    			'title' => request('title'),
                'body' => request('body'),
    			'user_id' => auth()->user()->id
    		]
    	);  

        if(request('tag'))
        {
            $tags = App\Tag::create(
                [
                    'name' => request('tag')
                ]
            ); 

            $post->tags()->sync($tags->id);
        }

        session()->flash('message','You post has been now published');

        return redirect("/");  
    }
}
