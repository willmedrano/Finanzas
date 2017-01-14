<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Session;
use Redirect;
use App\User;
use DB;
use Carbon\Carbon;
class ControladorUsuarios extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth', ['only' => 'admin']);
    }
     
 

    public function index(Request $request)
    {
       $users=\App\User::paginate(2);
        if($request->ajax()){
            return response()->json(view('usuarios.users',compact('users'))->render());
        }
        
        return view('usuarios.index', compact('users'));
    }
 public function admin(){
      return view('usuarios.login');  
    }
    public function MostrarInicio(){
        return view('plantilla');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('usuarios.registrarusuario');
    }
protected function getSesion()
    {
       date_default_timezone_set("America/El_Salvador");
        $h= "" . date("h:i:s:a");

     
        $date = Carbon::now();
 \App\Bitacora::create([
            'descripcion' => "Asalido del sistema",
            'hora' => $h,
            'fecha' => $date,
            'usuarios' => Auth::user()->name,
            ]);
       
        Auth::logout();
        return view('usuarios.login');
        
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


         \App\User::create([
            'name'=>$request['name'],
            'email'=>$request['email'],
            'password'=>bcrypt($request['contra1']),
            ]);

///Aqui esta donde ingresa en la bitacora
         date_default_timezone_set("America/El_Salvador");
        $h= "" . date("h:i:s:a");
        $date = Carbon::now();
        \App\Bitacora::create([
            'descripcion' => "Registro un Usuario ",
            'hora' => $h,
            'fecha' => $date,
            'usuarios' => Auth::user()->name,
            ]);


        return redirect('/usuarios/create')->with('message','store');
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
        $usu = \App\User::find($id);
        $aux=$request['hi2'];

        if($aux=='1')
        {
        $usu->name = $request['name'];
        $usu->email = $request['email'];
        $usu->password = $request['password'];
       
       
        }
        $usu->save();

///Aqui esta donde ingresa en la bitacora
         date_default_timezone_set("America/El_Salvador");
        $h= "" . date("h:i:s:a");
        $date = Carbon::now();
        \App\Bitacora::create([
            'descripcion' => "Modifico el Usuario",
            'hora' => $h,
            'fecha' => $date,
            'usuarios' => Auth::user()->name,
            ]);

        return redirect('/usuarios')->with('message','update');
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
