<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Area;

class CourseController extends Controller
{
    public function areaCurso(){
        $course = Course::find(1); #criar uma função que retorne um curso

        echo $course->name.'<br><hr>';

        $areaId = $course->area_id;

        $area = Area::where('id', $areaId)->get()->first();

        echo $area->description;
        
    }
}
