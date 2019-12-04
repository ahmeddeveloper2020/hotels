<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roomclass extends Model
{
    protected $table="roomclasses";
    protected $fillable =['name','discription'];
    
        public function room()
        {
            return $this->hasMany(Futurebooking::class);
        } 
}
