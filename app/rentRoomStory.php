<?php

namespace App;

use App\rentRoom;

use Illuminate\Database\Eloquent\Model;

class rentRoomStory extends Model
{
    protected $table = "rent_room_stories";
    protected $guarded;

    public function rentRoom()
    {
        return $this->beLongsTo(rentRoom::class, 'rentRoom_id');
    }
    public function payRentRoom()
    {
        return $this->hasMany(payRentRoom::class, 'payRentRoom_id');
    }
    public function user()
    {
         return $this->belongsTo(User::class,'user_id');
    }
}
