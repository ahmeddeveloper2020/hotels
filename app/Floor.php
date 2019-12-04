<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    protected $table="floors";
    protected $fillable =['name'];
    
        public function room()
        {
            return $this->hasMany(Room::class);
        } 
}
