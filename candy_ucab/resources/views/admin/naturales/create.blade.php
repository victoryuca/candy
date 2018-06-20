@extends('layouts.index')

@section('title', 'Crear Cliente Natural')

@section('inicio')
<link rel="stylesheet" href="/css/style2.css">
<div class="contenedor-formularios">
	{!! Form::open(['route' => 'naturales.store', 'method' => 'POST']) !!}

		<div class="contenedor-tabs">
			{!! Form::label('cedula', 'Cedula')!!}
			{!! Form::number('nat_cedula', null,['class' => 'form-control', 'placeholder' => 'Ej: 26605119','require']) !!}
		</div>

		<div class="contenedor-tabs">
			{!! Form::label('nombre', 'Nombre')!!}
			{!! Form::text('nat_nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre','require']) !!}
		</div>

		<div class="contenedor-tabs">
			{!! Form::label('apellido', 'Apellido')!!}
			{!! Form::text('nat_apellido', null, ['class' => 'form-control', 'placeholder' => 'Apellido','require']) !!}
		</div>

		<div class="contenedor-tabs">
			{!! Form::label('fechanac', 'Fecha de Nacimiento')!!}
			{!! Form::date('nat_fechanac', null, ['class' => 'form-control', 'placeholder' => 'DD/MM/AA','require']) !!}
		</div>

		<div class="contenedor-tabs">
			{!! Form::label('ciudad', 'Ciudad')!!}
			{!! Form::number('fk_natural_lugar', null, ['class' => 'form-control', 'placeholder' => 'num','require']) !!}
		</div>

		<div class="contenedor-tabs">
			{!! Form::label('tienda', 'Tienda')!!}
			{!! Form::number('fk_natural_tienda', null, ['class' => 'form-control', 'placeholder' => 'tienda','require']) !!}
		</div>

		<div class="contenedor-tabs">
			{!! Form::label('carnet', 'Numero de Carnet')!!}
			{!! Form::number('nat_numerocarnet', null,['class' => 'form-control', 'placeholder' => 'Ej: 000001','require']) !!}
		</div>

		<div class="contenedor-tabs">
			{!! Form::submit('Registrar Cliente', ['class' => 'btn btn-primary'])!!}
		</div>
		
	{!! Form::close() !!}
	</div>
<br></br>

@endsection