<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visiter extends Model
{
    protected $table="visiters";
    protected $fillable =['name','gender','social_status','phone'];
    
        public function futurebooking()
        {
            return $this->hasMany(Futurebooking::class);
        } 
        public function booking()
        {
            return $this->hasMany(Booking::class);
        } 
}
