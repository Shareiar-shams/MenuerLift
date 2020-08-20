<?php

namespace App\Admin\user;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function posts()
    {
    	return $this->belongsToMany('App\Admin\user\post', 'category_posts')->orderBy('created_at', 'desc')->paginate(5);
    }
    public function getRouteKeyName()
    {
    	return 'slug';
    }
}
