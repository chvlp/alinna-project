<?php

namespace App;
use App\members;

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
}
