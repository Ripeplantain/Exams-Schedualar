<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course_quota extends Model
{
    use HasFactory;
    protected $table = 'course_quota';


    public function course_db(){
        return $this->belongsTo(Course_db::class,'courseid','courseid');
    }
}
