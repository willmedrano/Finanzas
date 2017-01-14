<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\auxiliar2ventas;
class auxiliarControl2 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
        return view('layouts.inicio');
        
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
        auxiliar2ventas::create([
            'preciocomp3' => $request['cajavender'],
            'descompra3' => $request['subtotal'],
            'cancompra3' => $request['cajavender'],
            'idprods3' => $request['hprod'],  
        ]);

         $id=$request['hprod'];

            $costo =\App\producto::find($id);
            //$lot=\App\lotes::find($id);
          $lot=\App\lotes::where('idprodsl',$id)->get();
          $lot2=\App\lotes::find($lot[0]->id);

           
                    //$caj=$request['cajavender'] * $costo->uniCaja;
                    $uni=$request['cajavender'];

                   $lot2->canlote = $lot2->canlote-($uni);
                    $lot2->save();
        return redirect('ventas/create');
                    
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
     
    $auxeliminar= auxiliar2ventas::find($id);

    $id2=$auxeliminar->idprods3;

            $costo =\App\producto::find($id2);
            //$lot=\App\lotes::find($id);
          $lot=\App\lotes::where('idprodsl',$id2)->get();
          $lot2=\App\lotes::find($lot[0]->id);

           
                    //$caj=$auxeliminar->cancompra3 * $costo->uniCaja;
                    $uni=$auxeliminar->preciocomp3;

                   $lot2->canlote = $lot2->canlote+($uni);
                    $lot2->save();




    $auxeliminar->delete();
        return redirect('ventas/create');   
    }
}