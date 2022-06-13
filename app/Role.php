<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\Role','role_user','user_id','role_id');
        // $user = App\users::find(1);

        // foreach($user->roles as $role){
        //     echo $role->pivot->created_at;
        // }
    }
}
