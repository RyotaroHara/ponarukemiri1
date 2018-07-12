<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BattleController extends Controller
{
    public function battle()
    {
        return view('battle.battle');
    }

}
