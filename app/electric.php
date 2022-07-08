<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\members;
use App\rooms;

class electric extends Model
{
    protected $table = "electrics";
    protected $guarded;

    public function rentRoom()
    {
        return $this->beLongsTo(rentRoom::class,'rentRoom_id');
    }
    public function member()
    {
        return $this->beLongsTo(members::class,'member_id');
    }
    public function payElectric()
    {
        return $this->hasMany(payElectric::class,'elect_id');
    }
}
