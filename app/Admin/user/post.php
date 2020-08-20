<?php

namespace App\Admin\user;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    public function tags()
    {
    	return $this->belongsToMany('App\Admin\user\tag', 'post_tags')->withTimestamps();
    }

    public function categories()
    {
    	return $this->belongsToMany('App\Admin\user\category', 'category_posts')->withTimestamps();
    }
    public function getRouteKeyName()
    {
    	return 'slug';
    }
}
