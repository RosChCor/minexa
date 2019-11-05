<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provedor_descuento extends Model
{
    //
    protected $table = 'proveedor_descuento';
        
            protected $primarykey = 'id';
        
            protected $fillable = ['proveedor_id','descuento_id'];

            public $timestamps = true;
}
