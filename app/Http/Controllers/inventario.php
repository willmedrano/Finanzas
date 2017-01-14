<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\producto;
use Session;
use Redirect;
class inventario extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   
    public function index()
    {
        //
        $pro =\App\producto::proPro();
        $prov =\App\proveedor::All();
       // return view('layouts.inicio');
       return view('inventario.index',compact('pro','pro2'),compact('prov'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //return view('ventas.facturar');
       // return view('ventas.venta');
        $prov =\App\proveedor::All();
        return view('inventario.formInv',compact('prov'));
        
       //return view('inventario.lotes');

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

        \App\producto::create([
            'cod' => $request['cod'],
            'nomProd' => $request['nom'],
            'marca' => $request['marca'],
            
            'idProve' => $request['idProve'],
            'gUni' => $request['gUni'],
            
            'desc' => $request['desc'],
        ]);
        
        return redirect('inve/create')->with('message','store');
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
        $pro2 =\App\producto::mostrar($id);
        return view('inventario.index',compact('pro2'));
       
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
        //return response()->json($this->producto->toArray());
        $pro3=producto::find($id);
        return view('inve.index',compact('$pro3'));
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
        $productos = producto::find($id);
        $aux=$request['hi2'];

        if($aux=='1')
        {
        $productos->nomProd = $request['nomProd'];
        $productos->marca = $request['marca'];
        $productos->gUni = $request['gUni'];
        
        $productos->idProve = $request['idProve'];
        

        $productos->desc = $request['desc'];
        }
        if($aux=='2')
        {
            $productos->estado =true;
        }
        if($aux=='3')
        {
            $productos->estado =false;
        }


        $productos->save();

        Session::flash('mensaje','¡Registro Actualizado!');
        return redirect::to('/inve')->with('message','update');;
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