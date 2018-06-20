@extends('layouts.index')

@section('title', 'Clientes Juridicos')

@section('inicio')
<link rel="stylesheet" href="/css/style3.css">
<div class="contenedor-formularios">
	<a href="{{ route('juridicos.create') }}" class="btn btn-info">Registrar nuevo cliente juridico</a><hr>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>RIF</th>
			<th>Nombre</th>
			<th>Número de Carnet</th>
			<th>Razón Social</th>
			<th>Página Web</th>
			<th>Denominación Comercial</th>
			<th>Capital</th>
			<th>Acción</th>
		</thead>
		<tbody>
			@foreach($juridicos as $juridico)
				<tr>
					<td>{{ $juridico->jur_id }}</td>
					<td>{{ $juridico->jur_rif }}</td>
					<td>{{ $juridico->jur_nombre }}</td>
					<td>{{ $juridico->jur_numerocarnet }}</td>
					<td>{{ $juridico->jur_razonsocial }}</td>
					<td>{{ $juridico->jur_paginaweb }}</td>
					<td>{{ $juridico->jur_denomcomerc }}</td>
					<td>{{ $juridico->jur_capital }}</td>
					<td><a href="{{ route('juridicos.edit', $juridico->jur_id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
					<a href="{{ route('juridicos.destroy', $juridico->jur_id) }}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
					</td>

				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $juridicos->render() !!}
	</div>
@endsection