<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Item;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            $battles = $user->battles()->orderBy('created_at', 'desc')->paginate(10);

            $data = [
                'user' => $user,
                'battles' => $battles,
            ];
        }
        return view('welcome');
    }
}