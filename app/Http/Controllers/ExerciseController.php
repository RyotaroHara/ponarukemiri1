<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Exercise;

class ExerciseController extends Controller{



public function place($name)
    {
        $menu = Exercise::select('id','list')->where('place',  $name)->get();
        
        return view('Exercise.exercise', [
                'menu' => $menu,
            ]);
    }

public function index($id)
    {   
        $content = Exercise::select('id','exe_name', 'explanation')->where('id', $id)->get();
    
        return view('Exercise.show' , [
            'content' =>$content,
            ]);
    }
    
    
    
    

public function cafeteria()
    {
        return view('Exercise.basic page.cafeteria page');
    }


    public function cafeteria1()
    {
        return view('Exercise.exercise explanation.cafeteria.cafeteria1');
    }
    
    public function cafeteria2()
    {
        return view('Exercise.exercise explanation.cafeteria.cafeteria2');
    }
    
    public function cafeteria3()
    {
        return view('Exercise.exercise explanation.cafeteria.cafeteria3');
    }
    
    public function cafeteria4()
    {
        return view('Exercise.exercise explanation.cafeteria.cafeteria4');
    }
    
    public function cafeteria5()
    {
        return view('Exercise.exercise explanation.cafeteria.cafeteria5');
    }
    
    public function cafeteria6()
    {
        return view('Exercise.exercise explanation.cafeteria.cafeteria6');
    }
    
    public function cafeteria7()
    {
        return view('Exercise.exercise explanation.cafeteria.cafeteria7');
    }
    
    public function cafeteria8()
    {
        return view('Exercise.exercise explanation.cafeteria.cafeteria8');
    }

public function way()
    {
        return view('Exercise.basic page.way page');
    }
    
    public function way1()
    {
        return view('Exercise.exercise explanation.way.way1');
    }
    
    public function way2()
    {
        return view('Exercise.exercise explanation.way.way2');
    }
    
    public function way3()
    {
        return view('Exercise.exercise explanation.way.way3');
    }
    
    public function way4()
    {
        return view('Exercise.exercise explanation.way.way4');
    }
    
    public function way5()
    {
        return view('Exercise.exercise explanation.way.way5');
    }
    
    public function way6()
    {
        return view('Exercise.exercise explanation.way.way6');
    }
    
    public function way7()
    {
        return view('Exercise.exercise explanation.way.way7');
    }
    
    public function way8()
    {
        return view('Exercise.exercise explanation.way.way8');
    }
    
public function office()
    {
        return view('Exercise.basic page.office page');
    }
    
    public function office1()
    {
        return view('Exercise.exercise explanation.office.office1');
    }
    
    public function office2()
    {
        return view('Exercise.exercise explanation.office.office2');
    }
    
    public function office3()
    {
        return view('Exercise.exercise explanation.office.office3');
    }
    
    public function office4()
    {
        return view('Exercise.exercise explanation.office.office4');
    }
    
    public function office5()
    {
        return view('Exercise.exercise explanation.office.office5');
    }
    
    public function office6()
    {
        return view('Exercise.exercise explanation.office.office6');
    }
    
    public function office7()
    {
        return view('Exercise.exercise explanation.office.office7');
    }
    
    public function office8()
    {
        return view('Exercise.exercise explanation.office.office8');
    }
    
    public function office9()
    {
        return view('Exercise.exercise explanation.office.office9');
    }
    
    public function office10()
    {
        return view('Exercise.exercise explanation.office.office10');
    }
}
