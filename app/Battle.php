<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Battle extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cal',
    ];
}
