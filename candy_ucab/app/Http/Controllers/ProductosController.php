<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductosController extends Controller
{
    public function index(){
		$productos = Producto::orderBy('pro_id', 'ASC')->paginate(10);

		return view('admin.productos.index')->with('productos', $productos);
	}

    public function create(){
    	return view('admin.productos.create');
	}

	public function store(Request $request){
		$producto = new Producto($request->all());
		$producto -> save();

		flash($producto->pro_nombre.' Se ha agregado de forma exitosa')->success();
		
		return redirect()->route('productos.index');
	}

	public function edit($pro_id){
		$producto = Producto::find($pro_id);
		return view('admin.productos.edit')->with('producto', $producto);
	}

	public function update(Request $request, $pro_id){
		$producto = Producto::find($pro_id);
		$producto->pro_precio = $request->pro_precio;
		$producto->pro_nombre = $request->pro_nombre;
		$producto->pro_color = $request->pro_color;
		$producto->pro_sabor = $request->pro_sabor;
		$producto->save();

		flash('El producto '. $producto->pro_nombre .' ha sido editado con exito.')->warning();
		return redirect()->route('productos.index');
	}

	public function destroy($pro_id){
		$producto = Producto::find($pro_id);
		$producto->delete();
		
		flash('El producto '. $producto->pro_nombre .' ha sido borrado de forma exitosa')->error();
		return redirect()->route('productos.index');
	}
}
