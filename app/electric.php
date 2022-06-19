<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\members;
use App\rooms;

class electric extends Model
{
    protected $table = "electrics";
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
