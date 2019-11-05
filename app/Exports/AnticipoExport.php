<?php

namespace App\Exports;

use App\Anticipos;
use Maatwebsite\Excel\Concerns\FromCollection;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class AnticipoExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    /*public function collection()
    {
        return anticipo::all();
    }*/

    /*public function collection()
    {
        $anticipos = Anticipos::select('id','codigo','anticipo','estado')
        ->orderBy('codigo','asc')
        ->get();
        return  $anticipos $anticipos;
    }*/

    public function view(): View
    {
        $anticipos = Anticipos::select('id','codigo','anticipo','estado')
        ->orderBy('codigo','asc')
        ->get();
        return view('anticipo', ['anticipos'=>$anticipos]);
    }
}
