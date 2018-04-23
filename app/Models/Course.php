<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Area;

class Course extends Model
{
    public $timestamps = false;

    public function area($id){
        // return $this->hasOne(Area::class);
        return $this->where('id', $id);
    }
}
