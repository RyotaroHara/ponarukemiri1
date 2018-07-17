<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Exercise extends Model
{
    public $timestamps = false; //timesatampを利用しない
    protected $fillable = ['id', 'exe_name', 'place','explanation','cal'];
}
