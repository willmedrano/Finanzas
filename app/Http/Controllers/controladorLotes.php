<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\lotes;
use DB;
class controladorLotes extends Controller
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
        $lotes = lotes::proLot();
        return view('inventario.lotes',compact('lotes')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productor=\App\producto::All();
        $ventas=\App\ventasp::All();
        $cont=0;
        foreach ($productor as $key ) {
            # code...c

            $productor[$cont]->cPromedio=0;
            $productor[$cont]->gUni=0;
            foreach ($ventas as $key2) {
                # code...
                if($key->id==$key2->idProd)
                {
                    $productor[$cont]->cPromedio=$productor[$cont]->cPromedio+$key2->preciov;
                    $productor[$cont]->gUni=$productor[$cont]->gUni+$key2->cantidadv;
                }
            }
            $cont++;
            //for($cont=$p; $cont<count($comp2); $cont++)
                                                        
            //$comp=\App\ventasp::where('idProd',$key->id)->get();

        }
        

        //$lotes=ventasp::where('idProd',1)->get();
        
// $x=0;   
       // foreach ($lotes as $key ) {
        // $x=$x+$key->preciov;  
        //}
        //$lotes = lotes::proLot();
        return view('Productos.index',compact('productor'));
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
         $lotes = lotes::find($id);
         $pro=\App\producto::find($lotes->idprodsl);

         $comp=\App\detalle_compra::pro3($pro->id);
         $comp2=\App\ventasp::pro3($pro->id);
         

        // $com=\App\compras::pro2($comp->id);
        return view('inventario.kardex',compact('lotes','pro','comp','comp2')); 
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
