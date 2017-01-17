<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Storage;
use Illuminate\Support\Facades\Validator;

class ControladorClientes extends Controller
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
        $emple=\App\cliente::All();
   
      //$emp=\App\empleado::sEmp();
       return view('cliente.index',compact('emple'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('cliente.registrocliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $archivo = $request->file('files');//Aqui me obtiene el archivo seleccionado en el formulario foto
        $input  = array('image' => $archivo) ;//Es ara validar que se esta subiendo
        $reglas = array('image' => 'required|image|mimes:jpeg,jpg,bmp,png,gif|max:900');// le decimos que este campo es requerido es de tipo imagen y los formatos que pueden guardarse
        $validacion = Validator::make($input,  $reglas);//Aqui ase una comparacion si cumple los requerimientos
        if ($validacion->fails())//Por si no cumple mandara un mensaje en pantalla
        {
         // return view("mensajes.msj_rechazado")->with("msj","El archivo no es una imagen valida");
        }
        else
        {
        $idempleado=0;//inicializamos este contador es para tener un mejor control de aque usuario se le asignara la imagen
        $nempleados =\App\cliente::All();//Me obtiene todos los empleados que se encuentran en la base de datos
        foreach ($nempleados as $valor2) {
            $idempleado=$valor2->id;//espara ubicarme en ultimo empleado
        }
           $idempleado =$idempleado+1;//Aqui le sumamos uno para indicar que es el siguiente empleado a insertarle la imagen
            $nombre_original=$archivo->getClientOriginalName();// Espara obtener el nombre original de esa imagen que fue selecionada
            $extension=$archivo->getClientOriginalExtension();//Me extrae la extencion de ese archivo que a sido seleccionado
            $nuevo_nombre="userimagen-".$idempleado.".".$extension;//A se le asigna un nuevo nombre ase archivo que se llamara userimagen-id del empleado y le concateno la ruta de esa imagen
            $r1=Storage::disk('local')->put($nuevo_nombre,  \File::get($archivo) );// espara que guarde en el disco coloque el nombre del nuevo archivo que biene por el metodo request
            //$rutadelaimagen="../storage/fotografias/".$nuevo_nombre;//Creamos una ruta la cual se guarda en la base de datos
        
            if ($r1){//Si todo salio bien cree el nuevo usuario. con su respectiva imagen.

        \App\cliente::create([
            'fotoEmp'=>$nuevo_nombre,
            'nomEmp'=>$request['nombreE'],
            'apeEmp'=>$request['apeEmp'],
            'NacEmp'=>$request['Fnac'],
            'ing'=>$request['ing'],
            'DUIEmp'=>$request['dui'],
            'NITEmp'=>$request['nit'],
            'dirEmp'=>$request['dir'],
            'telEmp'=>$request['tel1'],
            'sexEmp'=>$request['sexo'],
            
            ]);
                //$usuario=User::find($id);
               // $usuario->imagenurl=$rutadelaimagen;
                //$r2=$usuario->save();
                //return view("mensajes.msj_correcto")->with("msj","Imagen agregada correctamente");
            }
             

            }

            return redirect('/clientes/create')->with('message','store');
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
        $client=\App\cliente::find($id);
        //return response()->json($this->emplead->toArray());
       // return view('seguridad.permitir',['emple'=>$emple]);
          return view('cliente.index',['emple'=>$clien]);
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
        $trab = \App\cliente::find($id);
        $aux=$request['hi2'];
       
        if($aux=='1')
        {
        $trab->nomEmp = $request['nomEmp'];
        $trab->apeEmp = $request['apeEmp'];
        $trab->DUIEmp = $request['DUI'];
        $trab->NITEmp = $request['NIT'];
        $trab->NacEmp = $request['Fnac'];
        $trab->dirEmp = $request['dir'];
        $trab->telEmp = $request['telEmp'];
        //$trab->sueldoEmp = $request['salario'];
        //$trab->cargoEmp = $request['cargo'];
        $trab->sexEmp = $request['sexo'];
        //$trab->sexEmp = $request['sexo'];correoEmp
        //$trab->contraEmp = $request['desc'];
        }

        if($aux=='2')
        {
            $trab->estadoEmp =true;
        }
        if($aux=='3')
        {
            $trab->estadoEmp =false;
        }


        $trab->save();
        


    return redirect('/clientes/');
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
