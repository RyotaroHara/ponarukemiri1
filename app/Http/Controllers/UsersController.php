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
 if ($user->id == \Auth::user()->id)
             return view('users.show',[
           'user' => $user, ]);
         else { return redirect('/users');   }
         
    
    }

     public function index(Request $request)
    {

        return redirect('/users/'.$request->user()->id);
    }
    public function edit($id)
    {
        $info = User::select('id', 'Weight','IdealWeight','year','month','day','height','fat','ExerciseIntensity') ->where('id',$id)->first();
        return view('users.edit', ['info'=>$info]);
        }


    public function update(Request $request, $id)
    {
        $this -> validate($request, [
            'Weight' => 'required',
            'IdealWeight' => 'required',
            'height' => 'required',
            'year' => 'required',
            'month' => 'required',
            'day' => 'required',
            ]);
            
        $info = User::find($id);
        $info ->Weight = $request -> Weight;
        $info ->IdealWeight = $request -> IdealWeight;
        $info ->height = $request -> height;
        $info ->year = $request -> year;
        $info ->month = $request -> month;
        $info ->day = $request -> day;
        $info ->save();
        
        return redirect('users');
        
    }
}
