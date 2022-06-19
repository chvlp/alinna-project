<?php

namespace App;
use App\rooms;

use Illuminate\Database\Eloquent\Model;

class type_room extends Model
{
    protected $table ="type_rooms";
    protected $guarded;

    public function room()
    {
        return $this->hasMany(rooms::class,'type_id');
    }
    
}
