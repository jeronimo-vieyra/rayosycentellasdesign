<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Rayos & Centellas</title>

	@include('aplicacion.fronts')
	
	@include('aplicacion.header')
	
</head>
<body>

	@include('aplicacion.menu')

	@include('aplicacion.flash')

	@yield('content')

	@include('aplicacion.scripts')		

</body>
</html>
