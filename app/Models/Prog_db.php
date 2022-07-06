<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prog_db extends Model
{
    use HasFactory;
    protected $table = 'prog_db';


    public function major_db(){
        return $this->hasMany(Prog_db::class);
    }

    public function faculty(){
        return $this->belongsTo(Faculty::class,'facultyid','facultyid');
    }

    public function department(){
        return $this->belongsTo(Department::class,'deptid','deptid');
    }
}
