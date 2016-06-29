<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		Mi Blog 
		@section('titulo')            
		@show
	</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
@section('cabecera')            
@show	
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1>Administrador</h1>
			</div>
		</div>
		<nav class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li><a class="active" href="{{asset('/admin')}}">Usuarios</a></li>
				<li><a href="{{asset('/posts')}}">Posts</a></li>
			</ul>
		</nav>

		<div class="container-fluid">
			 @yield('contenido')
		</div>
	</div>
@section('script')            
@show	
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>	
</body>
</html>