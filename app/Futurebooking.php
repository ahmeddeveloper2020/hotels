<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Futurebooking extends Model
{
    protected $table="futurebookings";
    protected $fillable =['name','visiter_id','start_date','end_date','duration','status','classroom_id'];
    
        public function roomclass()
        {
            return $this->belongsTo(Roomclass::class,'roomclass_id');
        } 
        public function visiter()
        {
            return $this->belongsTo(Visiter::class,'visiter_id');
        } 
}
