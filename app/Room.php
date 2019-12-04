<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table="rooms";
    protected $fillable =['name','roomclass_id','price','status','floor_id'];
    
        public function roomclass()
        {
            return $this->belongsTo(Roomclass::class,'roomclass_id');
        } 
        public function floor()
        {
            return $this->belongsTo(Floor::class,'floor_id');
        } 
}
