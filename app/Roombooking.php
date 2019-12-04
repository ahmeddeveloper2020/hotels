<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roombooking extends Model
{
    protected $table="roomsbooking";
    protected $fillable =['room_id','start_date','end_date','date','status'];
    
        public function room()
        {
            return $this->belongsTo(Room::class,'room_id');
        } 
}
