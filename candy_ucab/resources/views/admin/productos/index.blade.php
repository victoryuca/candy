@extends('layouts.index')

@section('title', 'Productos')

@section('inicio')
<link rel="stylesheet" href="/css/style.css">
<div class="contenedor-formularios">
	<a href="{{ route('productos.create') }}" class="btn btn-info">Agregar un nuevo producto</a><hr>
	<table class="table table-striped">
		<thead>
			<th>Precio</th>
			<th>Nombre</th>
			<th>Color</th>
			<th>Sabor</th>
			<th>Acción</th>
		</thead>
		<tbody>
			@foreach($productos as $producto)
				<tr>
					<td>{{ $producto->pro_precio }}</td>
					<td>{{ $producto->pro_nombre }}</td>
					<td>{{ $producto->pro_color }}</td>
					<td>{{ $producto->pro_sabor }}</td>
					<td><a href="{{ route('productos.edit', $producto->pro_id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
					<a href="{{ route('productos.destroy', $producto->pro_id) }}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
					</td>

				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $productos->render() !!}
</div>
	
@endsection