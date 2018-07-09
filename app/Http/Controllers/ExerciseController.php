<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Item;

class ExerciseController extends Controller
{
    public function cafeteria()
    {
        return view('Exercise.cafeteria');
    }
    
        public function cafeteria1()
    {
        return view('cafeteria.cafeteria1');
    }
    
     public function way()
    {
        return view('Exercise.way');
    }
     public function office()
    {
        return view('Exercise.office');
    }
}
