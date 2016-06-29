<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="{{elixir('css/app.css')}}">
</head>
<body>
	<div class="container">
		
	<h1>{{$titulo}}</h1>
	<form method="POST" action="">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="form-group">
			<input class="form-control" type="text" name="usuario" placeholder="Usuario" autocomplete="off">
		</div>
		<div class="form-group">
			<input class="form-control" type="password" name="password" placeholder="Password">
		</div>
		<div class="form-group">
			<input class="form-control btn btn-success" type="submit" value="Enviar">
		</div>
	</form>
	</div>
</body>
</html>