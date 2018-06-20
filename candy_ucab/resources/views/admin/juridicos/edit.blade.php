@extends('layouts.index')

@section('title', 'Editar Cliente Juridico')

@section('inicio')
<link rel="stylesheet" href="/css/style2.css">
<div class="contenedor-formularios">
	{!! Form::open(['route' => ['juridicos.update', $juridico], 'method' => 'PUT']) !!}

		<div class="form-group">
			{!! Form::label('rif', 'RIF')!!}
			{!! Form::number('jur_rif', $juridico->jur_rif, ['class' => 'form-control', 'placeholder' => 'Ej: J-402425031','require']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('nombre', 'Nombre')!!}
			{!! Form::text('jur_nombre', $juridico->jur_nombre, ['class' => 'form-control', 'placeholder' => 'Nombre','require']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('razon_social', 'Razón Social')!!}
			{!! Form::text('jur_razonsocial', $juridico->jur_razonsocial, ['class' => 'form-control', 'placeholder' => 'Ej: C.A','require']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('paginaweb', 'Pagina Web')!!}
			{!! Form::url('jur_paginaweb', $juridico->jur_paginaweb, ['class' => 'form-control', 'placeholder' => 'Ej: http://candyucab.com','require']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('denomcomerc', 'Denominación Comercial')!!}
			{!! Form::text('jur_denomcomerc', $juridico->jur_denomcomerc, ['class' => 'form-control', 'placeholder' => 'Denominación Comercial','require']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('capital', 'Capital')!!}
			{!! Form::number('jur_capital', $juridico->jur_capital, ['class' => 'form-control', 'placeholder' => '100000','require']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('correo', 'Correo')!!}
			{!! Form::email('jur_correo', $juridico->jur_correo,['class' => 'form-control', 'placeholder' => 'ejemplo@candyucab.com','require']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Editar Cliente', ['class' => 'btn btn-primary'])!!}
		</div>

	{!! Form::close() !!}
	</div>
<br></br>
@endsection