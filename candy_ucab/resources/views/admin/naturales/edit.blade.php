@extends('layouts.index')

@section('title', 'Editar Cliente Natural '. $natural->nat_nombre)

@section('inicio')
<link rel="stylesheet" href="/css/style2.css">
<div class="contenedor-formularios">
	{!! Form::open(['route' => ['naturales.update', $natural], 'method' => 'PUT']) !!}

		<div class="form-group">
			{!! Form::label('cedula', 'Cedula')!!}
			{!! Form::number('nat_cedula', $natural->nat_cedula,['class' => 'form-control', 'placeholder' => 'Ej: 26605119','require']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('nombre', 'Nombre')!!}
			{!! Form::text('nat_nombre', $natural->nat_nombre, ['class' => 'form-control', 'placeholder' => 'Nombre','require']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('apellido', 'Apellido')!!}
			{!! Form::text('nat_apellido', $natural->nat_apellido, ['class' => 'form-control', 'placeholder' => 'Apellido','require']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('fechanac', 'Fecha de Nacimiento')!!}
			{!! Form::date('nat_fechanac', $natural->nat_fechanac, ['class' => 'form-control', 'placeholder' => 'DD/MM/AA','require']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Editar Cliente', ['class' => 'btn btn-primary'])!!}
		</div>

	{!! Form::close() !!}
	</div>
<br></br>
@endsection