<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Item;

class ExerciseController extends Controller

    
        public function cafeteria1()
    {
        return view('cafeteria.cafeteria1');
    }
<<<<<<< HEAD
    
    public function cafeteria2()
    {
        return view('cafeteria.cafeteria2');
    }
    
    public function cafeteria3()
    {
        return view('cafeteria.cafeteria3');
    }
    
    public function cafeteria4()
    {
        return view('cafeteria.cafeteria4');
    }
    
    public function cafeteria5()
    {
        return view('cafeteria.cafeteria5');
    }
    
    public function cafeteria6()
    {
        return view('cafeteria.cafeteria6');
    }
    
    public function cafeteria7()
    {
        return view('cafeteria.cafeteria7');
    }
    
    public function cafeteria8()
    {
        return view('cafeteria.cafeteria8');
    }
    
     public function way()
=======

public function way()
>>>>>>> 4ce1c710fd7e60767cb65b22243f995353ba797a
    {
        return view('Exercise.way');
    }
     public function office()
    {
        return view('Exercise.office');
    }
}
