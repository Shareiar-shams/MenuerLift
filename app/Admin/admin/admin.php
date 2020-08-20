<?php

namespace App\Admin\admin;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class admin extends Authenticatable
{
    //
    use Notifiable;

    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }

    public function roles()
    {
    	return $this->belongsToMany('App\Admin\admin\role', 'admin_roles');
    }

    protected $fillable = [
        'name', 'email', 'password', 'phone', 'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
