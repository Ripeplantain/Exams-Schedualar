<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    protected $table = 'faculty';

    public function department(){
        return $this->hasMany(Department::class,'facultyid','facultyid');
    }

    public function college(){
        return $this->belongsTo(College::class,'collegeid','collegeid');
    }

    public function Program_db(){
        return $this->hasMany(Prog_db::class,'facultyid','facultyid');
    }
}
