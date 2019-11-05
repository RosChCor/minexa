<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proveedores;
use App\Descuentos;
use App\Proveedor_descuento;
use Illuminate\Support\Facades\DB;

class Reporte1Controller extends Controller
{
    //
    public function index()
    {
        
        $dps = DB::table('Proveedores')
        ->join('Proveedor_descuento','Proveedores.id','=','Proveedor_descuento.proveedor_id')
        ->join('Descuentos','Proveedor_descuento.descuento_id','=','Descuentos.id')
        ->select('Proveedores.id','Proveedores.proveedor','Descuentos.descuento','Descuentos.porcentaje','Descuentos.descuento_fijo')
        ->get();

        $c = Proveedores::first();
       /* $c = DB::table('proveedores')
        ->leftjoin('proveedor_descuento','proveedores.id','=','proveedor_descuento.proveedor_id')
        ->join('descuentos','proveedor_descuento.descuento_is','=','descuentos.id')
        ->select('proveedores*','descuentos*')
        ->count();

        //foreach($dp)
          
        $as = Proveedores::with('Proveedor_descuentos')->get();*/
        return view('reporte1', ['dps'=>$dps,'c'=>$c]);

    }
}
