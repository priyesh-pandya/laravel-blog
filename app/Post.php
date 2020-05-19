<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class Post extends Model
{

    protected $fillable = ['title', 'body', 'user_id']; 

    public function comments()
    { 
        return $this->hasMany(Comment::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class); 
    }

    public function scopeFilter($query, $filters)
    {
        if (isset($filters['month'])) {

         $query->whereMonth('created_at', Carbon::parse($filters['month'])->month);
        
        }

        if (isset($filters['year'])) {

         $query->whereYear('created_at', $filters['year']);
       
        } 
    } 

    public static function archives()
    {
        return DB::table('posts')
                     ->select(DB::raw('year(created_at) as year,monthname(created_at) as monthname,count(*) published'))    
                     ->groupBy('year','monthname')
                     ->orderByRaw('min(created_at) desc')
                     ->get()->toArray(); 
    }

    public function tags()
    {
       return $this->belongsToMany(Tag::class);
    }
}