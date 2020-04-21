<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table='clientes';

    protected $fillable=['nombre', 'apellidos', 'correo','telefono', 'direccion', 'contraseña'];
}