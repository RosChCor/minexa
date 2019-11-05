<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anticipos extends Model
{
    //
    protected $table = 'anticipos';
        
            protected $primarykey = 'id';
        
            protected $fillable = ['id','codigo','anticipo','estado'];

            public $timestamps = true;
}
