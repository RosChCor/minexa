<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reporte1 extends Model
{
    //
    protected $table = 'descuento_proveedores';
        
            protected $primarykey = 'id';
        
            protected $fillable = ['id','id_proveedor','proveedor','descuento','porcentaje','descuento_fijo'];

            public $timestamps = true;
}
