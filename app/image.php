<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\rooms;


class image extends Model
{
    protected $table = "images";
    protected $guarded;

    public function room()
    {
        return $this->beLongsTo(rooms::class,'room_id');
    }
}
