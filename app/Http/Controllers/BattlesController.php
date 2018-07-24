<?php

namespace App\Http\Controllers;

use App\User;
use App\Battle;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BattlesController extends Controller
{
    
    protected $redirectTo = 'battle.battle';

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'cal'=>'required|integer|between:1,10000|digits_between:1,2,3,4,5',
            'num'=>'required|integer|between:1,10000|digits_between:1,2,3,4,5',
        ]);
    }
    
     protected function create(array $data)
    {
        return Battle::create([
            'cal' => $data['cal'],
            'num' => $data['num'],
        ]);
    }
    
  
  
    public function battle_menu($userId)
    {
        $user = User::select('id', 'Weight','IdealWeight','year','month','day','height','fat','ExerciseIntensity')->where('id', $userId)->get()->first();
        return view('battle.basic page.cafeteria battle', ['user' => $user]);
    }
    
    public function show()
    {
        return view('welcome');
    }
    
    
    public function store(Request $request)
    {

        $this->validate($request, [
            'cal' => 'required|max:255',
            'num' => 'required|max:255',
        ]);
        
        $request->user()->battles()->create([
            'cal' => $request->cal,
            'num' => $request->num,
        ]);
        return redirect('/battle/menu/'.$request->user()->id);
    }

}