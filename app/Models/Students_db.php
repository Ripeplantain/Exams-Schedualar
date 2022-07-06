<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students_db extends Model
{
    use HasFactory;

    protected $table = 'students_db';

    public function regdata(){
        return $this->HasMany(Regdata::class);
    }
}
