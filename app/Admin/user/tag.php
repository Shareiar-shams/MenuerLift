<?php

namespace App\Admin\user;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    public function posts()
    {
    	return $this->belongsToMany('App\Admin\user\post', 'post_tags')->orderBy('created_at', 'desc')->paginate(5);
    }

    public function getRouteKeyName()
    {
    	return 'slug';
    }
}
