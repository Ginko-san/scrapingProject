<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
    public $timestamps = false;
    //protected $primaryKey = 'idPromocion';
    protected $table = 'promociones';

    protected $fillable = [
        'nombre', 'precioReal', 'precioOferta','ahorro','cantVentas','validez','imagenusers','url',
    ];
}
