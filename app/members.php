<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\rent_room;

class members extends Model
{
    protected $table = "members";
    protected $guarded;


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function rent_room()
    {
        return $this->hasMany(rent_room::class,'member_id');
    }

}
