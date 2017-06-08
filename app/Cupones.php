<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cupones extends Model
{
    public $timestamps = false;
    //protected $primaryKey = 'idPromocion';
    protected $table = 'cupones';

    protected $fillable = [
        'nombre', 'precioReal', 'precioOferta','ahorro','cantVentas','validez','imagen', 'url',
    ];
}
