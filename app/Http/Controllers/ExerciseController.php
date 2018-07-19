<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Exercise;

class ExerciseController extends Controller{
    


public function place($name)
    {
        $menus = Exercise::select('id','exe_name', 'explanation')->where('place', $name)->get();
        return view('Exercise.landing',['menus' => $menus]);
    }
    
    
public function menu($id)
    {
        $expla = Exercise::select('exe_name', 'explanation')->where('id', $id)->first();
        $place = Exercise::select('place')->where('id', $id)->first();
        $place_info = $place->place;
        
        $genres = Exercise::select('id', 'exe_name', 'place')->where('place', $place_info)->get();
        
        return view('Exercise.expla', ['expla'=>$expla,'genres'=>$genres, 'place_info'=>$place_info]);
    }
    

    
    
    
    

}
    


