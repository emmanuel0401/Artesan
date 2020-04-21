<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artesanias extends Model
{
    //
    protected $table='artesanias';

    protected $fillable=['nombre', 'tipo','precio', 'cantidad', 'descripcion', 'foto', 'stock'];
}
