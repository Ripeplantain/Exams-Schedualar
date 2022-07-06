<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    use HasFactory;
    protected $table = 'colleges';

    public function faculty()
    {
        return $this->HasMany(Faculty::class,'collegeid','collegeid');
    }
}
