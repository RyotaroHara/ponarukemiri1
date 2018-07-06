<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Item;

class FitnessgoodsController extends Controller
{
    public function ichiba()
    {
        return view('fitnessgoods.ichiba');
    }
}
