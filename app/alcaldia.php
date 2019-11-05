<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alcaldia extends Model
{
    //
    protected $table = 'alcaldias';
        
            protected $primarykey = 'id';
        
            protected $fillable = ['id','codigo','alcaldia','estado'];

            public $timestamps = true;
}
