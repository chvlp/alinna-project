<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\rentRoom;

class members extends Model
{
    protected $table = "members";
    protected $guarded;


    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function rentRoom()
    {
        return $this->hasMany(rentRoom::class,'member_id');
    }

}
