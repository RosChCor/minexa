<?php

namespace App\Exports;

use App\Proveedores;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ProveedoresExport implements  FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    /*public function collection()
    {
        return Proveedores::all();
    }*/

    public function view(): View
    {
        $proveedores = Proveedores::select('id','proveedor','responsable','direccion','telefono','email')
        ->orderBy('id','asc')
        ->get();
        return view('proveedores', ['proveedores'=>$proveedores]);
    }
}
