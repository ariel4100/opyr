<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $cabeceras = 'From: administracion@opyr.com.ar';

//        mail('arielcallisaya00@gmail.com','Solicitud de Registro de la Pagina Web','hola',$cabeceras);
        $subject = "Opyr - Solicitud de Registro";
        $for = "arielcallisaya00@gmail.com";
//        $for = "administracion@opyr.com.ar";
        Mail::send('mail',$request->all(), function($msj) use($subject,$for){
            $msj->from("administracion@opyr.com.ar","OPYR");
            $msj->subject($subject);
            $msj->to($for);
        });
//                dd('enviado');
//        Mail::to('arielcallisaya00@gmail.com')->send();
//        $this->validator($request->all())->validate();

          $this->create($request->all());
//
//        $this->guard()->login($user);
//
        return  redirect($this->redirectPath());
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        //dd('aca');
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'username' => $data['username'],
            'social' => $data['social'],
            'telefono' => $data['telefono'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
