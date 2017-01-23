<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PdfControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $fch1=$request->fechaInicial;
      $fch2=$request->fechaFinal;
      

      $detalle=\App\proveedor::All();
      
      $date = date('d-m-Y');
      $date1 = date('g:i:s a');
      $vistaurl="pdf.reporteprovedores";
      $view =  \View::make($vistaurl, compact('date','date1','fch1','fch2','detalle'))->render();
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);

      return $pdf->stream('reporte');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
    $fch1=$request->fechaInicial;
      $fch2=$request->fechaFinal;
      

      $detalle=\App\cliente::All();
      
      $date = date('d-m-Y');
      $date1 = date('g:i:s a');
      $vistaurl="pdf.reporteclientes";
      $view =  \View::make($vistaurl, compact('date','date1','fch1','fch2','detalle'))->render();
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);

      return $pdf->stream('reporte');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }
    public function facturaC_F(Request $request)
    {
        $fch1=$request->fechaInicial;
      $fch2=$request->fechaFinal;
      

     // $detalle=\App\proveedor::All();
      
      $date = date('d-m-Y');
      $date1 = date('g:i:s a');
      $vistaurl="pdf.reportefactura";
      $view =  \View::make($vistaurl, compact('date','date1','fch1','fch2'))->render();
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);

      return $pdf->stream('reporte');
    }
 public function facturaC_C(Request $request)
    {
        $fch1=$request->fechaInicial;
      $fch2=$request->fechaFinal;
      

     // $detalle=\App\proveedor::All();
      
      $date = date('d-m-Y');
      $date1 = date('g:i:s a');
      $vistaurl="pdf.reportefacturacliente";
      $view =  \View::make($vistaurl, compact('date','date1','fch1','fch2'))->render();
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);

      return $pdf->stream('reporte');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
