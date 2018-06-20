<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente_Natural;
use Laracasts\Flash\Flash;

class NaturalesController extends Controller
{

	public function index(){
		$naturales = Cliente_Natural::orderBy('nat_id', 'ASC')->paginate(10);

		return view('admin.naturales.index')->with('naturales', $naturales);
	}

    public function create(){
    	return view('admin.naturales.create');
	}

	public function store(Request $request){
		$cliente_natural = new Cliente_Natural($request->all());
		$cliente_natural -> save();

		flash($cliente_natural->nat_nombre .' '. $cliente_natural->nat_apellido .' Se ha registrado de forma exitosa')->success();
		
		return redirect()->route('naturales.index');
	}

	public function edit($nat_id){
		$natural = Cliente_Natural::find($nat_id);
		return view('admin.naturales.edit')->with('natural', $natural);
	}

	public function update(Request $request, $nat_id){
		$natural = Cliente_Natural::find($nat_id);
		$natural->nat_nombre = $request->nat_nombre;
		$natural->nat_cedula = $request->nat_cedula;
		$natural->nat_apellido = $request->nat_apellido;
		$natural->nat_fechanac = $request->nat_fechanac;
		$natural->save();

		flash('El usuario '. $natural->nat_nombre .' '. $natural->nat_apellido .' ha sido editado con exito.')->warning();
		return redirect()->route('naturales.index');
	}

	public function destroy($nat_id){
		$natural = Cliente_Natural::find($nat_id);
		$natural->delete();
		
		flash('El cliente natural '. $natural->nat_nombre .' ha sido borrado de forma exitosa')->error();
		return redirect()->route('naturales.index');
	}
}
