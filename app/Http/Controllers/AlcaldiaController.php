<?php

namespace App\Http\Controllers;

use App\alcaldia;
use Illuminate\Http\Request;
use PDF;
use Excel;
use App\Exports\ExportAlcaldia;

class AlcaldiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$alcaldias = alcaldia::all();
        $alcaldias = alcaldia::orderBy('codigo','asc')
        ->get();
        //return view('alcaldia', ['alcaldias'=>$alcaldias]);
        //$pdf = PDF::loadView('alcaldia',compact('alcaldias'));
        //return $pdf->stream('alcaldias.pdf');

        return Excel::download(new ExportAlcaldia, 'alcaldia.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\alcaldia  $alcaldia
     * @return \Illuminate\Http\Response
     */
    public function show(alcaldia $alcaldia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\alcaldia  $alcaldia
     * @return \Illuminate\Http\Response
     */
    public function edit(alcaldia $alcaldia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\alcaldia  $alcaldia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, alcaldia $alcaldia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\alcaldia  $alcaldia
     * @return \Illuminate\Http\Response
     */
    public function destroy(alcaldia $alcaldia)
    {
        //
    }
}
