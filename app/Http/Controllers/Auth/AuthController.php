<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Auth;
use Session;
use App\Http\Requests\loginRequest;
use Carbon\Carbon;
class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
     protected function getLogin()
    {
        return view('usuarios.login');
    }


       

        public function postLogin(loginRequest $request)
   {
  

     if (Auth::attempt( ['email'=>$request['email'], 'password'=>$request['password']] ))
    {
      date_default_timezone_set("America/El_Salvador");
        $h= "" . date("h:i:s:a");;
     
        $date = Carbon::now();
 \App\Bitacora::create([
            'descripcion' => "Iniciado Sesion en el Sistema",
            'hora' => $h,
            'fecha' => $date,
            'usuarios' => Auth::user()->name,
            ]);
       
        return view('plantilla');
    }
    Session::flash('menssage-error',"Los datos son Incorectos");
    return view('usuarios.login');
    }
}
