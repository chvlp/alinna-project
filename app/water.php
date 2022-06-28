<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class water extends Model
{
    protected $table = "waters";
    protected $guarded;
    public function payWater()
    {
        return $this->hasMany(payWater::class,'water_id');
    }
}
