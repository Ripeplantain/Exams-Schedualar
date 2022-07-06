<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venue_tb extends Model
{
    use HasFactory;

    protected $table = 'venue_tb';

    public function timetable(){
        return $this->hasOne(Timetable::class,'venue_id','venue_id');
    }
}
