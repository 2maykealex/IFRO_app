<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AreaController extends Controller
{
    public function courses(){
        $area = Area::find(1);

        echo $area->descricao.'<br>';
        
        dd($area->courses[0]->name);

        dd($area);
    }
}
