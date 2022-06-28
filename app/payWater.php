<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payWater extends Model
{
    protected $table = "pay_waters";
    protected $guarded;

    public function water()
    {
        return $this->beLongsTo(water::class,'water_id');
    }

}
