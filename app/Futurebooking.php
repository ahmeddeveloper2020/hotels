<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Futurebooking extends Model
{
    protected $table="futurebookings";
    protected $fillable =['visiter_id','start_date','end_date','duration','room_id'];
    
        public function room()
        {
            return $this->belongsTo(Room::class,'room_id');
        } 
        public function visiter()
        {
            return $this->belongsTo(Visiter::class,'visiter_id');
        } 
}
