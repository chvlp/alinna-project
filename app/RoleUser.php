<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Role;

class RoleUser extends Model
{
    protected $table = "role_user";

    protected $guarded;

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function role(){
        return $this->belongsTo(Role::class);
    }
}
