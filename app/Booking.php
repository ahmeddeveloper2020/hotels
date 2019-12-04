<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table="bookings";
    protected $fillable =['visiter_id','room_id','duration','start_date','end_date','price','status'];
    
        public function room()
        {
            return $this->belongsTo(Room::class,'room_id');
        } 
        public function visiter()
        {
            return $this->belongsTo(Visiter::class,'visiter_id');
        } 
}
