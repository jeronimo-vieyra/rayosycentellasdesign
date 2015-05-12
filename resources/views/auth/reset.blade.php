@extends('aplicacion/app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Restablecer la contraseña</div>
				<div class="panel-body">

					<form class="form-horizontal" role="form" method="POST" action="{{url()}}/password/reset">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="token" value="{{ $token }}">

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>
						@if ($errors->first('email'))<div class="col-md-6 col-md-offset-4 alert alert-danger">{{$errors->first('email')}}</div>@endif

						<div class="form-group">
							<label class="col-md-4 control-label">Contraseña</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>
						@if ($errors->first('password'))<div class="col-md-6 col-md-offset-4 alert alert-danger">{{$errors->first('password')}}</div>@endif

						<div class="form-group">
							<label class="col-md-4 control-label">Confirmar contraseña</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password_confirmation">
							</div>
						</div>
						@if ($errors->first('password_confirmation'))<div class="col-md-6 col-md-offset-4 alert alert-danger">{{$errors->first('password_confirmation')}}</div>@endif

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Restablecer la contraseña
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
