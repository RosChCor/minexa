<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Anticipos;
use PDF;
use Excel;
use App\Exports\AnticipoExport;

class AnticiposController extends Controller
{
    //
    public function index()
    {
        //
        //$anticipo = anticipo::all();
        $anticipos = Anticipos::orderBy('codigo','asc')
        ->get();
        //return view('anticipo', ['anticipos'=>$anticipos]);
        //$pdf = PDF::loadView('anticipo',compact('anticipos'));
        //return $pdf->stream('anticipo.pdf');

        return Excel::download(new AnticipoExport, 'anticipo.xlsx');
    }
}
