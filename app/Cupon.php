<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cupon extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'nombre';
    protected $table = 'cupones';
    protected $fillable = [
        'id', 'nombre', 'precioReal', 'precioOferta','ahorro','cantVentas','validez','imagen', 'url',
    ];
}
