<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\rooms;
use App\members;

class rent_room extends Model
{
    protected $table = "rent_rooms";
    protected $guarded;

    public function room()
    {
        return $this->beLongsTo(rooms::class,'room_id');
    }

    public function member()
    {
        return $this->beLongsTo(members::class,'member_id');
    }
}
