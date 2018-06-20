<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente_Juridico;
use Laracasts\Flash\Flash;

class JuridicosController extends Controller
{

	public function index(){
		$juridicos = Cliente_Juridico::orderBy('jur_id', 'ASC')->paginate(10);

		return view('admin.juridicos.index')->with('juridicos', $juridicos);	
	}
	
    public function create(){
    	return view('admin.juridicos.create');
	}

	public function store(Request $request){
		$cliente_juridico = new Cliente_Juridico($request->all());
		$cliente_juridico->fk_juridico_lugar_fiscal = 45;
		$cliente_juridico->fk_juridico_lugar_fisico = 45;
		$cliente_juridico->fk_juridico_tienda = 45;
		$cliente_juridico -> save();
		
		flash($cliente_juridico->nat_nombre .' '. $cliente_juridico->jur_apellido .' Se ha registrado de forma exitosa')->success();

		return redirect()->route('juridicos.index');
	}

	public function edit($jur_id){
		$juridico = Cliente_Juridico::find($jur_id);
		return view('admin.juridicos.edit')->with('juridico', $juridico);
	}

	public function update(Request $request, $jur_id){
		$juridico = Cliente_Juridico::find($jur_id);
		$juridico->jur_rif = $request->jur_rif;
		$juridico->jur_nombre = $request->jur_nombre;
		$juridico->jur_razonsocial = $request->jur_razonsocial;
		$juridico->jur_paginaweb = $request->jur_paginaweb;
		$juridico->jur_denomcomerc = $request->jur_denomcomerc;
		$juridico->jur_capital = $request->jur_capital;
		$juridico->jur_correo = $request->jur_correo;
		$juridico->save();

		flash('El usuario '. $juridico->nat_nombre .' '. $juridico->nat_apellido .' ha sido editado con exito.')->warning();
		return redirect()->route('juridicos.index');
	}

	public function destroy($jur_id){
		$juridico = Cliente_Juridico::find($jur_id);
		$juridico->delete();
		
		flash('El cliente juridico '. $juridico->jur_nombre .' ha sido borrado de forma exitosa')->error();
		return redirect()->route('juridicos.index');
	}
}
