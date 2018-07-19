<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\Item;
class UsersController extends Controller
{
    /**
     * Display the specified resource.
     /*
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

       // $items = \DB::table('items')->join('item_user', 'items.id', '=', 'item_user.item_id')->select('items.*')->where('item_user.user_id', $user->id)->distinct()->paginate(20);

        return view('users.show', [
            'user' => $user,
        ]);
    }
    
    public function edit($id)
    {
        $info = User::select('Weight') ->where('id',$id)->get();
        return view('users.edit', ['info'=>$info]);
        
        
        
        
        
        
    }
    
    
}

