<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    //
    protected $table='usuarios';

    protected $fillable=['id', 'nombre','email', 'address'];

    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}

