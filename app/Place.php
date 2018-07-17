<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    public $timestamps = false; //timesatampを利用しない
    protected $fillable = ['id', 'name', 'list'];
}
