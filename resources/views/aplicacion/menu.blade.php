<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Rayos & Centellas</a>
		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href="{{ url('/') }}">Inicio</a></li>
				<li><a href="{{ action('UsuariosController@index') }}">Usuarios</a></li>
				<li><a href="{{ action('ContactosController@index') }}">Contacto</a></li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				@if (Auth::guest())
					<li><a href="{{ url('/login') }}">Login</a></li>
				@else
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user() }} <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="{{ action('UsuariosController@edit', [\Auth::user()->id]) }}">Editar perfil</a></li>
							<li><a href="{{ url('/auth/logout') }}">Cerrar Sesión</a></li>
						</ul>
					</li>
				@endif
			</ul>
		</div>
	</div>
</nav>