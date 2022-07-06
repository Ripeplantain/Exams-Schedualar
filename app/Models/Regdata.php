<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Regdata extends Model
{
    use HasFactory;

    protected $table = 'regdata';

    public function course_db(){
        return $this->belongsTo(Course_db::class,'courseid','courseid');
    }

    public function student_db(){
        return $this->belongsTo(Students_db::class,'studid','studid');
    }
}
