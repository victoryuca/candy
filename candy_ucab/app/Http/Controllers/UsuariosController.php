<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class UsuariosController extends Controller
{
    
	public function index(){
		//
	}

    public function create(){
    	return view('admin.usuarios.create');
	}

	public function store(Request $request){
		//dd($request->all());
		$usuario = new Usuario($request->all());
		//$usuario->usu_contraseña = bcrypt($request->usu_contraseña);
		$usuario -> save();
		dd('usuario creado');
	}
}
