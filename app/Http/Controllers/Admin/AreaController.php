<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Area;

class AreaController extends Controller
{
    public function coursesArea(){
        $area = Area::find(1);

        echo $area->description.'<br> <hr>';

        $cursos = $area->courses;

        // dd($cursos);

        foreach ($cursos as $curso){
            echo ' - '.$curso->name.'<br>';
        }
        
        // dd($area->courses[0]->name);

        // dd($area);
    }
}
