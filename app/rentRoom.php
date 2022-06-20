<?php

namespace App;
use App\members;
use App\rooms;
use App\rentRoomStory;

use Illuminate\Database\Eloquent\Model;

class rentRoom extends Model
{
    protected $table ="rent_rooms";
    protected $guarded;

    public function member()
    {
        return $this->belongsTo(members::class,'member_id');
    }

    public function room()
    {
        return $this->belongsTo(rooms::class,'room_id');
    }
    public function rentRoomStory()
    {
        return $this->hasMany(rentRoomStory::class,'rentRoom_id');
    }
}
