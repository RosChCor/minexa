<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Proveedores;
use PDF;
use Excel;
use App\Exports\ProveedoresExport;

class ProveedoresController extends Controller
{
    //
    public function index()
    {
        //
        //$proveedores = Proveedores::all();
        $proveedores = Proveedores::orderBy('id','asc')
        ->get();
        //return view('proveedor', ['proveedores'=>$proveedores]);
        //$pdf = PDF::loadView('proveedores',compact('proveedores'));
        //return $pdf->stream('proveedores.pdf');

        return Excel::download(new ProveedoresExport, 'proveedoress.xlsx');
    }
}
