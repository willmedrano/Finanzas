<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ventas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    public function index()
    {
        return view('ventas.facturar');
        
    }
    public function llenadoProducto2($codigopro)//retorno el nombre del producto y el proveedor.
    {
        $productor=\App\producto::where('cod',$codigopro)->get();
        $producto=\App\lotes::where('idprodsl',$productor[0]->id)->get();
    
        $productor2=\App\producto::find($producto[0]->idprodsl);

    
        return response()->json($productor2->toArray());
    
      

  }
      public function VerificarEPCaja($codigopro)//verica la cantidad que se tiene en caja de los productos.
      {

         $productor=\App\producto::where('id',$codigopro)->get();
         $producto=\App\lotes::where('idprodsl',$productor[0]->id)->get();
    
 
    return response()->json($producto->toArray());

  }
    public function VerificarEPUnidades($codigopro)//verica la cantidad que se tiene en caja de los productos en unidades.
      {
        $pro=\App\cliente::All();
        $producto1=\App\cliente::find(1);
        $producto1->id=0;
        $producto1->nomEmp="";

        foreach ($pro as $pro2) {
            # code...
            if($pro2->id==$codigopro)
            {
                $producto1=\App\cliente::find($codigopro);
            }
        }
        
        
        /*if (empty($producto1)) {
            $producto1->nomEmp=0;
        }*/
 
    return response()->json($producto1->toArray());
  }

    /**
      * Show the form for creating a new resource.   
     * @return \Illuminate\Http\Response
     **/
    public function create()
    {
        
       $aux =\App\auxiliar2ventas::auxComp3();
       $cli =\App\cliente::All();
       // $pro =\App\compra::mostrarcompra($request);

        $prov =\App\proveedor::All();
        
        return view('ventas.venta',compact('prov','aux','cli'));
 
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


        \App\facturacion::create([
             
            'fechaf' => $request['fecha'],
            'total' => $request['total'],
            'nomcli' => $request['cli'],
            'iva_credito' => $request['iva'],
            'detalle' => $request['des'],
            'idempl' => $request['codE'],
        ]);
        $ids;
        $gAux =\App\facturacion::All();
        foreach ($gAux as $valor2) {
            $ids=$valor2->id;
        }

        $gAux =\App\auxiliar2ventas::All();

        foreach ($gAux as $valor) 
        {
            $cal = \App\producto::find($valor->idprods3);
            \App\ventasp::create([
                //'' => $valor->preciocomp3,
                'preciov' => $valor->descompra3,
                'cantidadv' => (($valor->cancompra3*$cal->uniCaja)+$valor->preciocomp3),
                'idProd' => $valor->idprods3,
                'idFact' => $ids,

            ]);
                        
            
    }
       
        
        



  $eAux =\App\auxiliar2ventas::All();
        foreach ($eAux as $v) {
                 
                   
                  $auxeliminar= \App\auxiliar2ventas::find( $v->id );
                  $auxeliminar->delete();               
        }


        $limpiar=\App\lotes::All();
        foreach ($limpiar as $limpiar2) {
                 
                   if($limpiar2->canlote==0)
                   {
                        $borrar= \App\lotes::find( $limpiar2->id );
                        $borrar->delete();  
                   }
                                 
        }

        return redirect('ventas/create')->with('message','store');
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
