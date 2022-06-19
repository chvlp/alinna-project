<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\RoleUser;

class Role extends Model
{
    protected $table = "roles";
    protected $guarded;

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function roleUser()
    {
        return $this->hasMany(RoleUser::class);
    }
}
