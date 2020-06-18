<?php

namespace App\Policies;

use App\User;


use Illuminate\Auth\Access\HandlesAuthorization;

class Owner_CompanyPolicy
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
        return $this->getPermission($User,'owner');
        // return $this->getPermission($admin,'اظهار ادمن');


    }



    protected function getPermission($User,$p_title){
      
        foreach ($User->roles as $role){

            foreach ($role->permissions as $permission){

                if ($permission->title == $p_title){
                    return true;
                }
            }
        }
        return false;
    }



}
