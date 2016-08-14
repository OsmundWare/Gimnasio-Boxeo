@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Register</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">Rut</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="rut" value="{{ old('rut') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Nombre</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Apellido Paterno</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="apellido_paterno" value="{{ old('apellido_paterno') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Apellido Materno</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="apellido_materno" value="{{ old('apellido_materno') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Direccion</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="direccion" value="{{ old('direccion') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Comuna</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="comuna" value="{{ old('comuna') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Telefono</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="telefono" value="{{ old('telefono') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Rol</label>
							<div class="col-md-6">

								{!! Form::select('rol',

            							['1'=>'Administrador','2'=>'Preparador','3'=>'Boxeador'],
            							null,
            							['class'=>'form-control floating-label ','placeholder'=>'Rol:','required']
       								 ) !!}
								@if($errors->has('rol'))
									<p class="text-danger">{{$errors->first('rol')}}</p>
								@endif
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail Address</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Fecha Nacimiento</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Sexo</label>
							<div class="col-md-6">
								{!! Form::select('sexo',

            							['hombre'=>'Hombre','mujer'=>'Mujer'],
            							null,
            							['class'=>'form-control floating-label ','placeholder'=>'Sexo:','required']
       								 ) !!}
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Certificado Medico</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="certificado_medico" value="{{ old('certificado_medico') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Confirm Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password_confirmation">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Register
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
