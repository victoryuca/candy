@extends('layouts.index')

@section('title', 'Crear Cliente Juridico')

@section('inicio')
<link rel="stylesheet" href="/css/style2.css">
<div class="contenedor-formularios">
	{!! Form::open(['route' => 'juridicos.store', 'method' => 'POST']) !!}

		<div class="contenedor-tabs">
			{!! Form::label('rif', 'RIF')!!}
			{!! Form::number('jur_rif', null, ['class' => 'form-control', 'placeholder' => 'Ej: J-402425031','require']) !!}
		</div>

		<div class="contenedor-tabs">
			{!! Form::label('nombre', 'Nombre')!!}
			{!! Form::text('jur_nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre','require']) !!}
		</div>

		<div class="contenedor-tabs">
			{!! Form::label('numero_carnet', 'Número de Carnet')!!}
			{!! Form::number('jur_numerocarnet', null, ['class' => 'form-control', 'placeholder' => 'Ej: 00002','require']) !!}
		</div>

		<div class="contenedor-tabs">
			{!! Form::label('razon_social', 'Razón Social')!!}
			{!! Form::text('jur_razonsocial', null, ['class' => 'form-control', 'placeholder' => 'Ej: C.A','require']) !!}
		</div>

		<div class="contenedor-tabs">
			{!! Form::label('paginaweb', 'Pagina Web')!!}
			{!! Form::url('jur_paginaweb', null, ['class' => 'form-control', 'placeholder' => 'Ej: http://candyucab.com','require']) !!}
		</div>

		<div class="contenedor-tabs">
			{!! Form::label('denomcomerc', 'Denominación Comercial')!!}
			{!! Form::text('jur_denomcomerc', null, ['class' => 'form-control', 'placeholder' => 'Denominación Comercial','require']) !!}
		</div>

		<div class="contenedor-tabs">
			{!! Form::label('capital', 'Capital')!!}
			{!! Form::number('jur_capital', null, ['class' => 'form-control', 'placeholder' => '100000','require']) !!}
		</div>

		<div class="contenedor-tabs">
			{!! Form::label('correo', 'Correo')!!}
			{!! Form::email('jur_correo', null,['class' => 'form-control', 'placeholder' => 'ejemplo@candyucab.com','require']) !!}
		</div>

		<div class="contenedor-tabs">
			{!! Form::submit('Registrar Cliente', ['class' => 'btn btn-primary'])!!}
		</div>

	{!! Form::close() !!}
</div>
<br></br>

@endsection