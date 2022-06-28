<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payElectric extends Model
{
    protected $table = "pay_electrics";
    protected $guarded;

    public function electric()
    {
        return $this->beLongsTo(electric::class,'elect_id');
    }
}
