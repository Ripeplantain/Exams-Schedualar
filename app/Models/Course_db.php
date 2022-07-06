<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course_db extends Model
{
    use HasFactory;
    protected $table = 'course_db';

    public function department(){
        return $this->belongsTo(Department::class,'deptid','deptid');
    }

    public function course_desc(){
        return $this->hasOne(Course_desc::class,'courseid','courseid');
    }

    public function course_quota(){
        return $this->hasOne(Course_quota::class,'courseid','courseid');
    }

    public function regdata(){
        return $this->hasMany(RegData::class,'courseid','courseid');
    }
}
