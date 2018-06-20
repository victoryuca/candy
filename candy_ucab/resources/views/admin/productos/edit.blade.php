@extends('layouts.index')

@section('title', 'Editar Producto '. $producto->pro_nombre)

@section('inicio')
<link rel="stylesheet" href="/css/style4.css">
<div class="contenedor-formularios">
	{!! Form::open(['route' => ['productos.update', $producto], 'method' => 'PUT']) !!}

		<div class="contenedor-tabs">
			{!! Form::label('precio', 'Precio')!!}
			{!! Form::number('pro_precio', $producto->pro_precio,['class' => 'form-control', 'placeholder' => '20000','require']) !!}
		</div>

		<div class="contenedor-tabs">
			{!! Form::label('nombre', 'Nombre')!!}
			{!! Form::text('pro_nombre', $producto->pro_nombre, ['class' => 'form-control', 'placeholder' => 'Nombre','require']) !!}
		</div>

		<div class="contenedor-tabs">
			{!! Form::label('color', 'Color')!!}
			{!! Form::text('pro_color', $producto->pro_color, ['class' => 'form-control', 'placeholder' => 'Ej: Azul','require']) !!}
		</div>

		<div class="contenedor-tabs">
			{!! Form::label('sabor', 'Sabor')!!}
			{!! Form::text('pro_sabor', $producto->pro_sabor, ['class' => 'form-control', 'placeholder' => 'Ej: Menta','require']) !!}
		</div>

		<div class="contenedor-tabs">
			{!! Form::submit('Editar Producto', ['class' => 'btn btn-primary'])!!}
		</div>
	{!! Form::close() !!}
	</div>
<br></br>
@endsection