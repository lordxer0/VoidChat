<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Room;

class Message extends Model
{
    //
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
