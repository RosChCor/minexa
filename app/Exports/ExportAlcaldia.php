<?php

namespace App\Exports;

use App\alcaldia;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ExportAlcaldia implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    /*public function collection()
    {
        $alcaldias = alcaldia::select('id','codigo','alcaldia','estado')
        ->orderBy('codigo','asc')
        ->get();
        return $alcaldias;
    }*/

    public function view(): View
    {
        $alcaldias = alcaldia::select('id','codigo','alcaldia','estado')
        ->orderBy('codigo','asc')
        ->get();
        return view('alcaldia', ['alcaldias'=>$alcaldias]);
    }

}
