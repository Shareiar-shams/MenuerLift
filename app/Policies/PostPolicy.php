<?php

namespace App\Policies;

use App\Admin\admin\admin;
use App\Admin\user\post;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    
    public function viewAny(admin $user)
    {
        //
    }

    
    public function view(admin $user)
    {
        //
    }

    
    public function create(admin $user)
    {
        return $this->getPermission($user, 5);
    }

    
    public function update(admin $user)
    {
        return $this->getPermission($user, 6);
    }

    
    public function delete(admin $user)
    {
        return $this->getPermission($user, 7);
    }

    
    public function restore(admin $user)
    {
        //
    }

    
    public function forceDelete(admin $user)
    {
        //
    }

    public function getPermission(admin $user, $p_id)
    {
        foreach ($user->roles as $role) {
            foreach ($role->permissions as $permission) {
                if ($permission->id == $p_id) {
                    return true;
                }
                
            } 
        }

        return false;
    }
}
