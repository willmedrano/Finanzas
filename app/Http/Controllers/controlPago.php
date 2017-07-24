<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;


class controlPago extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $lotes = \App\pago::All();
        return view('pagos.index',compact('lotes')); 
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $pro=\App\pago::find($id);
        $lotes=\App\cuota::where('idPago',$pro->id)->get();
        return view('pagos.detalle2',compact('pro','lotes'));
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
        //$cuota=coutas::find($id);
        //$aux=$request['hi2'];
        //$t=$request['monto']+
        \App\cuota::create([
             'monto'=>$request['monto'],  
             'fecha'=>$request['fecha'],
             'mora'=>$request['mora'],
             'total'=>$request['total'],
             'idPago'=>$id,
            ]);

        $comp2 =\App\cuota::where('idPago',$id)->get();
        
        $ids=count($comp2);
        
        $cuota=\App\pago::find($id);
        if($ids==$cuota->cuotas)
        {
            $cuota->estado=false;
            $cuota->save();
            $cli =\App\cliente::find($cuota->);
            
        }
        else{
            $dt=$cuota->fecha;
            $cuota->fecha=date("Y-m-d", strtotime("$dt +1 month"));
            $cuota->save();

        }


         

       // Session::flash('mensaje','¡Registro Actualizado!');
        return redirect('/carteras/create');
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
