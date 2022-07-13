<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venue_tb extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'venue_tb';
    protected $primaryKey = 'venue_id';
    protected $guarded = ['venue_id'];

    public function timetable(){
        return $this->hasOne(Timetable::class,'venue_id','venue_id');
    }
}

