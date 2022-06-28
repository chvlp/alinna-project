<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payRentRoom extends Model
{
    protected $table = "pay_rent_rooms";
    protected $guarded;

    public function rentRoomStory()
    {
        return $this->belongsTo(rentRoomStory::class,'payRentRoom_id');
    }

    

}
