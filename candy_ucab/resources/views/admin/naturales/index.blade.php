@extends('layouts.index')

@section('title', 'Clientes Naturales')

@section('inicio')
<link rel="stylesheet" href="/css/style.css">
<div class="contenedor-formularios">
	<a href="{{ route('naturales.create') }}" class="btn btn-info">Registrar nuevo cliente natural</a><hr>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Cedula</th>
			<th>Número de Carnet</th>
			<th>Fecha de Nacimiento</th>
			<th>Acción</th>
		</thead>
		<tbody>
			@foreach($naturales as $natural)
				<tr>
					<td>{{ $natural->nat_id }}</td>
					<td>{{ $natural->nat_nombre }}</td>
					<td>{{ $natural->nat_apellido }}</td>
					<td>{{ $natural->nat_cedula }}</td>
					<td>{{ $natural->nat_numerocarnet }}</td>
					<td>{{ $natural->nat_fechanac }}</td>
					<td><a href="{{ route('naturales.edit', $natural->nat_id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
					<a href="{{ route('naturales.destroy', $natural->nat_id) }}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
					</td>

				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $naturales->render() !!}
</div>
	
@endsection