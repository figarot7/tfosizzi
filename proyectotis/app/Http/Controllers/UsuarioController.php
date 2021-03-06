<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Biblioteca\Usuario;
use App\Rol;
use Auth;
use \Session;
use App\Http\Requests\FormCrearUsuario;

class UsuarioController extends Controller {

    public function __construct() {
        //$this->middleware('autenticado', ['except' => ['login', 'autenticar']]);
        //$this->middleware('usuario', ['except' => ['login', 'autenticar', 'logout']]);
    }

    public function login() {
        return view('usuario.login');
    }

    public function registrarse() {
        return view('usuario.registrarse');
    }

    public function calendario() {
        return view('usuario.calendario');
    }

    public function autenticar(Request $peticion) {
        $credenciales = [
            'username' => $peticion->input('username'),
            'password' => $peticion->input('password'),
            'activo' => 1,
        ];
        if (Auth::attempt($credenciales)) {
            return redirect('/');
        } else {
            return redirect('/usuario/login')->withErrors(['error' => 'Usuario y/o contraseña incorrectos',])->withInput($peticion->only('username'));
        }
    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }

    public function crear() {//adm
        $roles = Rol::all();
        $tipos;
        foreach ($roles as $rl) {
            $tipos[$rl->id_rol] = $rl->nivel_permiso . ' ' . $rl->nombre_rol;
        }
        $parametros = ['tipos' => $tipos];
        //return view('usuario.lista', $parametros);
        return view('usuario.crear', $parametros);
    }

    public function almacenar(FormCrearUsuario $peticion) {//adm
        if ($peticion->input('password') === $peticion->input('rpassword')) {
            Usuario::create($peticion->all());
            Session::flash('user_created', 'Usuario creado');
            return redirect('/usuario/lista');
        } else {
            return redirect('/usuario/crear')->withErrors(['repetir' => 'Las contraseñas no coinciden',])->withInput($peticion->all());
        }
    }

    public function lista() { //adm
        $lista = Usuario::where('activo', 1)->orderBy('id_usuario')->paginate(5);
        $parametros = ['usuarios' => $lista];
        return view('usuario.lista', $parametros);
    }

    public function eliminar($id) {
        $usuario = $this->getUsuario($id);
        $usuario->activo = 0;
        $usuario->save();
        Session::flash('user_deleted', 'Usuario eliminado');
        return redirect('/usuario/lista');
    }

    public function editar($id) {
        $usuario = $this->getUsuario($id);
        $roles = Rol::all();
        $tipos;
        foreach ($roles as $rl) {
            $tipos[$rl->id_rol] = $rl->nivel_permiso . ' ' . $rl->nombre_rol;
        }
        $parametros = ['usuario' => $usuario, 'tipos' => $tipos];

        return view('usuario.editar', $parametros);
    }

    public function myinfo() {
        //$usuario = $this->getUsuario($id);
        $usuario =Auth::user();
        $rolaux = Rol::find($usuario->id_rol);
        $rolname = $rolaux->nombre_rol;
        $rolnivel = $rolaux->nivel_permiso;
        
        $parametros = ['usuario' => $usuario, 'rolname' => $rolname, 'rolnivel' => $rolnivel];
        return view('usuario.myinfo', $parametros);
    }

    public function actualizar($id, Request $peticion) {        
        $usuario->fill($peticion->all());
        $usuario->save();
        Session::flash('user_updated', 'Datos del usuario actualizados');
        return redirect('/usuario/lista');
    }

    public function getUsuario($id) {
        $usuario = Usuario::where('id_usuario', $id)->where('activo', 1)->first();
        if ($usuario === null)
            abort(500);
        else
            return $usuario;
    }

}
