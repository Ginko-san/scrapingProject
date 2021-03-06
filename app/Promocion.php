<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'idPromocion';
    protected $table = 'promociones';

    protected $fillable = [
        'idPromocion','nombre', 'precioReal', 'precioOferta','ahorro','cantVentas','imagenusers','url',
    ];
    
}
