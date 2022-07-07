<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


use App\Models\User;

class AssigningController extends Controller
{
    function assignUserRole($id,$roleName){
        
        $role = Role::findByName($roleName);
        $user = User::where('id', $id)->first();
        $user->assignRole($role);
        $all_users_with_all_their_roles = User::role($role)->get();

        
        return $all_users_with_all_their_roles;
    }
}


//Tinker command lines

// factory(App\User::class, 50)->create()->each(function ($user) {
//     $user->assignRole('subscription'); // assuming 'supscription' was a typo
// });

