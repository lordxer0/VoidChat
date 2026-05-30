<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Room;

class Message extends Model
{
    //
    protected $fillable = [
        'room_id',
        'username',
        'message',
    ];
    
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
