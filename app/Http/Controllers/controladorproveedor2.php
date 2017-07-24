<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\proveedor;
class controladorproveedor2 extends Controller
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
        $provee =proveedor::All();

        return view('prove.index',compact('provee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //carpeta prove
       return view('prove.create');
//return view('prove.buscar');
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
        \App\proveedor::create([
            'nom'=>$request['nom'],
            'tel'=>$request['tel'],
            'NIT'=>$request['nit'],
            'dir'=>$request['dir'],

            ]);
        return redirect('/prove/create')->with('message','store');

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
        $lotes = \App\pago::where('idCli',$id)->get();
        //$lotes=\App\cuota::where('idPago',$pro->id)->get();
        return view('carteras.historial',compact('lotes'));
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
        $prove2=proveedor::find($id);
        return view('prove.index',compact('$prove2'));
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
        $proves = \App\proveedor::find($id);
        $aux=$request['hi2'];

        if($aux=='1')
        {
        $proves->nom = $request['nompm'];
        $proves->tel = $request['telpm'];
        $proves->NIT = $request['nitpm'];
        $proves->dir = $request['dirpm'];
       
        }
        


        $proves->save();

        return redirect('/prove')->with('message','update');
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
