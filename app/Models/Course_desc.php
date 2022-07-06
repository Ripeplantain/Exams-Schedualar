<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course_desc extends Model
{
    use HasFactory;

    protected $table = 'course_desc';

    public function course_db(){
        return $this->belongsTo(Course_db::class,'courseid','courseid');
    }
}
