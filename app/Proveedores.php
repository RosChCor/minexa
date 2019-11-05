<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
    //
    protected $table = 'proveedores';
        
    protected $primarykey = 'id';

    protected $fillable = ['id','proveedor','responsable','direccion','telefono','email','estado'];

    public $timestamps = true;
}
