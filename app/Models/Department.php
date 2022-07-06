<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $table = 'departments';

    public function course_db(){
        return $this->HasMany(Course_db::class,'deptid','deptid');
    }

    public function faculty(){
        return $this->belongsTo(Faculty::class,'deptid','deptid');
    }

    public function prog_db(){
        return $this->HasMany(Prog_db::class,'deptid','deptid');
    }
}
