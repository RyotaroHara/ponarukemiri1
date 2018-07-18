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
            'cal'=>'required|integer|between:1,1000|digits_between:1,2,3,4',
        ]);
    }
    
     protected function create(array $data)
    {
        return Battle::create([
            'cal' => $data['cal'],
        ]);
    }
    
  
  
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
    
    
    public function store(Request $request)
    {

        $this->validate($request, [
            'cal' => 'required|max:255',
        ]);
        
        $request->user()->battles()->create([
            'cal' => $request->cal,
        ]);
    
        return redirect('/');
    }

}
