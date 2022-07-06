<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Major_db extends Model
{
    use HasFactory;
    protected $table = 'major_db';

    public function prog_db(){
        return $this->belongsTo(Major_db::class);
    }

    public function major_subject(){
        return $this->HasMany(Major_subject::class);
    }
}
