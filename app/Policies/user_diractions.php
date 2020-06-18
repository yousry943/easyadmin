<?php

namespace App\Policies;

use App\User;


use Illuminate\Auth\Access\HandlesAuthorization;

class user_diractions
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //



    }


    public function view(User $User)
    {
        //
        return $this->getPermission($User,'user_diractions');
        // return $this->getPermission($admin,'اظهار ادمن');


    }



    protected function getPermission($User,$p_title){
        foreach ($User->roles as $role){
//dd($User->roles);
            foreach ($role->permissions as $permission){

                if ($permission->title == $p_title){
                    return true;
                }
            }
        }
        return false;
    }



}
