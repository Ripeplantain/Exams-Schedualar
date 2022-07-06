<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timetable_tables extends Model
{
    use HasFactory;

    protected $table = 'timetable_tables';

    public function venue_tb(){
        return $this->belongsToMany(Venue_tb::class, 'venue_id','venue_id');
    }
}
