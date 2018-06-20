@extends('admin.template.main')

@section('title', 'Crear Usuario')

@section('content')

	{!! Form::open(['route' => 'usuarios.store', 'method' => 'POST']) !!}

		<div class="form-group">
			{!! Form::label('id', 'Nombre')!!}
			{!! Form::number('usu_id', null,['class' => 'form-control', 'placeholder' => 'Nombre completo','require']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('correo', 'Correo Electronico')!!}
			{!! Form::email('usu_correo', null, ['class' => 'form-control', 'placeholder' => 'ejemplo@gmail.com','require']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('contraseña', 'Contraseña')!!}
			{!! Form::password('usu_contraseña',['class' => 'form-control', 'placeholder' => '*******','require']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Registrar', ['class' => 'btn btn-primary'])!!}
		</div>

	{!! Form::close() !!}

@endsection