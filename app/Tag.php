<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class Tag extends Model
{

   protected $fillable = ['name']; 

   public function posts()
    { 
       return $this->belongsToMany(Post::class);
    }

    public function getRouteKeyName()
    {
    	return 'name';
    }
    
}
