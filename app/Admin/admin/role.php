<?php

namespace App\Admin\admin;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    public function permissions()
    {
    	return $this->belongsToMany('App\Admin\admin\Permission', 'permissions_role');
    }
}
