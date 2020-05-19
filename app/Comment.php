<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App;

class Comment extends Model
{
    
   protected $fillable = ['post_id', 'body','user_id'];

    /**
     * Get the post that owns the comment.
    */

    public function post()
    {
        return $this->belongsTo('App\Post');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
