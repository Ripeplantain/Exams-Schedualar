<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Major_subject extends Model
{
    use HasFactory;
    protected $table = 'major_subjects';

    public function major_db(){
        return $this->belongsTo(Major_db::class);
    }
}
