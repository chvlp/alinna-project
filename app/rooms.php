<?php

namespace App;
use App\type_room;
use App\image;
use App\rent_room;

use Illuminate\Database\Eloquent\Model;

class rooms extends Model
{
    protected $table ="rooms";
    protected $guarded;

    public function type_room()
    {
        return $this->belongsTo(type_room::class,'type_id');
    }
    public function image()
    {
        return $this->hasMany(image::class,'room_id');
    }
    public function rent_room()
    {
        return $this->hasMany(rent_room::class,'room_id');
    }
}
