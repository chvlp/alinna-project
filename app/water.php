<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class water extends Model
{
    protected $table = "waters";
    protected $guarded;

    public function rentRoom()
    {
        return $this->beLongsTo(rentRoom::class,'rentRoom_id');
    }
    public function member()
    {
        return $this->beLongsTo(members::class,'member_id');
    }
    public function payWater()
    {
        return $this->hasMany(water::class,'water_id');
    }

}
