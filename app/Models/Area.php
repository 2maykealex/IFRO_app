<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Course;

class Area extends Model
{
    public $timestamps = false;

    public function courses(){
        return $this->hasMany(Course::class);
    }
}
