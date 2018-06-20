@extends('layouts.index')

@section('title', 'Agregar Producto')

@section('inicio')
<link rel="stylesheet" href="/css/style4.css">
<div class="contenedor-formularios">
	{!! Form::open(['route' => 'productos.store', 'method' => 'POST']) !!}

		<div class="contenedor-tabs">
			{!! Form::label('precio', 'Precio')!!}
			{!! Form::number('pro_precio', null,['class' => 'form-control', 'placeholder' => '20000','require']) !!}
		</div>

		<div class="contenedor-tabs">
			{!! Form::label('nombre', 'Nombre')!!}
			{!! Form::text('pro_nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre','require']) !!}
		</div>

		<div class="contenedor-tabs">
			{!! Form::label('color', 'Color')!!}
			{!! Form::text('pro_color', null, ['class' => 'form-control', 'placeholder' => 'Ej: Azul','require']) !!}
		</div>

		<div class="contenedor-tabs">
			{!! Form::label('sabor', 'Sabor')!!}
			{!! Form::text('pro_sabor', null, ['class' => 'form-control', 'placeholder' => 'Ej: Menta','require']) !!}
		</div>

		<div class="contenedor-tabs">
			{!! Form::submit('Agregar Producto', ['class' => 'btn btn-primary'])!!}
		</div>
		
	{!! Form::close() !!}
	</div>
<br></br>

@endsection