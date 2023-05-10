<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException; //para enviar mensajes de error
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class LoginController extends Controller
{
    public function login()
    {
        // dd('se detuvo el codgo!!!');
        return view('VistasLogin.login');
    }

    public function store(Request $form)
    {
        // dd('hola ');
        //verificar que este bine hecho el formo
        $form->validate([
            'correo' => ['required', 'string'],
            'contra' => ['required', 'string']
        ]);

        // dd($form->correo);
        $user = User::where('email', $form->correo)->first(); //
        // dd($form );
        if ($user != null and Hash::check($form->contra, $user->password)) { //verificar la contrasena
            //bine escrito,hacer login
            Auth::login($user);
            //generar el token csrf
            $form->session()->regenerate();

            // $bienvenida = 'Bienvendo '.$user->name;

            // return redirect()->route('Dashboard')->with('bienvenida',$bienvenida);
            return redirect()->route('Producto.Index');
        } else {
            //mostrar un error
            if ($user == null) {
                throw ValidationException::withMessages([
                    //meustra el eeroror del correo
                    'correo' => 'Correo no encontrado',
                ]);
            } else {
                throw ValidationException::withMessages([
                    //meustra el eeroror del correo
                    'contra' => 'Contrasena Incorrecta',
                ]);
            }
        }


        //verificar si el correo exisete

        //logica
    }

    public function logout(Request $r)
    {
        //    dd($r);
        Auth::logout();

        //invalidacion la seccion
        $r->session()->invalidate();

        //token crsf
        $r->session()->regenerateToken();

        return redirect()->Route('Producto.Index');
    }



    public function dashboard()
    {
        // dd('hola que tal');
        return view('VistasLogin.dashboard');
        // return view('navbar');

    }

    public function registro()
    {

        return view('VistasLogin.registro');
    }


    public function registroStore(Request $r)
    {



        if (User::where('name', $r->usuario)->first()) {

            throw ValidationException::withMessages([
                //meustra el eeroror del correo
                'user' => 'Contrasena Incorrecta',
            ]);
        }

        if (User::where('email', $r->correo)->first()) {
            throw ValidationException::withMessages([
                //meustra el eeroror del correo
                'correo' => 'Contrasena Incorrecta',
            ]);
        }

        // dd('xdxdxdxd');
        $u = new User();
        $u->name = $r->usuario;
        $u->nombre = $r->nombre;
        $u->apellido = $r->apellido;
        $u->email = $r->correo;
        $u->password = Hash::make($r->contra);
        $u->save();

        //registrar un nuevo cliente en stripe
        // $u->createAsStripeCustomer();

        return redirect()->route('Login');
    }



    public function registroEdit(Request $r, User $user)
    {

        return view('VistasLogin.edit', compact('$user'));
    }


    public function registroUpdate(Request $r, User $user)
    {
        $u = $user;
        $u->name = $r->usuario;
        $u->email = $r->correo;
        $u->password = Hash::make($r->contra);
        $u->save();

        //registrar un nuevo cliente en stripe
        // $u->createAsStripeCustomer();

        return redirect()->route('Login');
    }
}
