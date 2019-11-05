<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Descuentos extends Model
{
    //
    protected $table = 'descuentos';
        
    protected $primarykey = 'id';

    protected $fillable = ['id','descuento','porcentaje','descuento_fijo','voluntario','estado'];

    public $timestamps = true;
}
