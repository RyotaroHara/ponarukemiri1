<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BattleController extends Controller
{
    public function cafeteria_genre()
    {
        return view('battle.basic page.cafeteria battle');
    }
    
    public function office_genre()
    {
        return view('battle.basic page.office battle');
    }
    
    public function way_genre()
    {
        return view('battle.basic page.way battle');
    }

}
