<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Battle extends Model
{
    protected $fillable = ['cal'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
